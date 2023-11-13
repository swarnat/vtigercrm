<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class VtigerLogger {
    
    static $filePath = '';
    static $logLevel = '';
    public static function getLogger(string $channel, $customFormatter = true) {
        $log = new self();
        if(self::$logLevel) {
            $log = new Logger($channel);
            $handler = new StreamHandler(self::$filePath, self::$logLevel);
            if($customFormatter) {
                $handler->setFormatter(new VtigerCustomFormatter());
            }
            $log->pushHandler($handler);
        }
        return $log;
        
    }
    public function info($message) { }
    public function debug($message) { }
}

use Monolog\Formatter\FormatterInterface;

class VtigerCustomFormatter implements FormatterInterface {

    public function format(Monolog\LogRecord $record) {
        $record = $record->toArray();
        $formatted = '[' . date('Y-m-d H:i:s') . '] - ' .$record['level_name'].' - '.$record['channel'].' - '.$record['message'] . PHP_EOL;
        return $formatted;
    }

    public function formatBatch(array $records) {
        $formatted = '';
        foreach ($records as $record) {
            $formatted .= $this->format($record);
        }
        return $formatted;
    }
}
