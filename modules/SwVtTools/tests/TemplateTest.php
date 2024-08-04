<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TemplateTest extends TestCase
{
    public $record;

    protected function setUp(): void
    {
        // require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');        
        chdir(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
        require_once('includes' . DIRECTORY_SEPARATOR . 'main' . DIRECTORY_SEPARATOR . 'WebUI.php');

        // include_once 'config.php';
        // require_once 'vendor/autoload.php';
        // include_once 'include/Webservices/Relation.php';

        // include_once 'vtlib/Vtiger/Module.php';
        // include_once 'includes/main/WebUI.php';        
        // require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'helper' . DIRECTORY_SEPARATOR . 'RecordValues.php');        
        // require_once(__DIR__ . DIRECTORY_SEPARATOR . 'TestEntity.php');

        $values = [
            'firstname' => 'Stefan',
            'lastname' => 'Warnat',
            'account_id' => 15,

            'account_id' => [
                'accountname' => 'Company GmbH'
            ]
        ];

        $this->record = new \SwVtTools_Entity_Test($values);
    }

    public function testVariables(): void
    {

        $tests = [
            'test' => 'test',
            'test $firstname' => 'test Stefan',
            'test {$firstname}' => 'test Stefan',
            'test $firstname test' => 'test Stefan test',
            'test $firstname $lastname test' => 'test Stefan Warnat test',
        ];

        $templateEngine = new SwVtTools_Template_Helper($this->record);

        foreach ($tests as $template => $expected) {
            // echo 'RUN ' . $test . PHP_EOL;
            $test = $templateEngine->parseFull($template);

            $this->assertSame($test, $expected);
            // echo '=== ' . $result . PHP_EOL . PHP_EOL;
        }
    }

    public function testReferences(): void
    {

        $tests = [
            'test $(account_id: (Accounts) accountname) test' => 'test Company GmbH test',
            'test $(account_id : (Accounts) accountname) test' => 'test Company GmbH test',
            'test {$(account_id : (Accounts) accountname)} test' => 'test Company GmbH test',
            'test $(account_id : (Accounts) accountname) - $(account_id : (Accounts) accountname) test' => 'test Company GmbH - Company GmbH test',
        ];

        $templateEngine = new SwVtTools_Template_Helper($this->record);

        foreach ($tests as $template => $expected) {
            // echo 'RUN ' . $test . PHP_EOL;
            $test = $templateEngine->parseFull($template);

            $this->assertSame($test, $expected);
            // echo '=== ' . $result . PHP_EOL . PHP_EOL;
        }
    }

    public function testShortcodes(): void
    {

        $tests = [
            'test $[NOW] test' => "test ".date('Y-m-d')." test",
            'test $[ECHO,ASD] test' => "test ASD test",
            'test $[ECHO,"[ASD]"] test' => "test [ASD] test",
            'test $[ECHO,"[ASD]","[ASD]"] test' => "test [ASD] test",
            'test $[ECHO,"[ASD]","[ASD]",\'[ASD]\'] test' => "test [ASD] test",
            'test $[ECHO,"[ASD]",ASD123_value,"[ASD]"] test' => "test [ASD] test",
            'test $[ECHO,"[ASD]"] $[ECHO,"[ASD]"] test' => "test [ASD] [ASD] test",
        ];

        $templateEngine = new SwVtTools_Template_Helper($this->record);

        foreach ($tests as $template => $expected) {
            // echo 'RUN ' . $test . PHP_EOL;
            $test = $templateEngine->parseFull($template);

            $this->assertSame($test, $expected);
            // echo '=== ' . $result . PHP_EOL . PHP_EOL;
        }
    }
}
