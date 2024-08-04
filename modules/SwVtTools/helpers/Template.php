<?php

/**
 * @package SwVtTools
 * @version 0.1
 * @author Stefam Warmat <swarnat@datentechnik-warnat.de>
 */

/** 
 * Changelog  of this helper
 * 0.1 - 14.08.2024
 *  - first version with variables and shortcodes
 **/

class SwVtTools_Template_Helper
{
    /**
     * Entity to use within template
     *
     * @var \SwVtTools_RecordValues_Interface
     */
    private $entity;

    /**
     * @param \SwVtTools_RecordValues_Interface  $record
     */
    public function __construct($record)
    {
        $this->entity = $record;
    }

    public function parseFull($template)
    {
        $result = $template;

        $result = $this->parseVariables($result);
        $result = $this->parseShortcodes($result);

        return $result;
    }

    /**
     * Thsi function replace all variables from string
     * Supports the following templates:
     * $fieldname
     * {$fieldname}
     * {$(referencefield: (ModuleName) referencedField)}
     * $(referencefield: (ModuleName) referencedField)
     * $(referencefield : (ModuleName) referencedField)

     * @param string $template
     * @return string
     */
    public function parseVariables(string $template)
    {
        $result = $template;

        $result = preg_replace_callback('/\{?\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\}?/', array($this, "match"), $result);

        $result = preg_replace_callback('/\{?\$\((\w+)\s?:\s\((\w+)\) (\w+)\)\}?/', array($this, "matchReference"), $result);

        return $result;
    }

    private function match($matches)
    {

        $variableName = $matches[1];

        return $this->entity->get($variableName);
    }

    private function matchReference($matches)
    {
        $referenceId = $this->entity->get($matches[1]);

        if (!empty($referenceId)) {
            $referenceRecord = $this->entity->getReference($matches[1]);

            return $referenceRecord->get($matches[3]);
        }

        return "";
    }

    /** SHORTCODE PARSER */
    /**
     * Parse shortcodes, an easy to use option for complex formatter
     *
     * @param string $template
     * @return void
     */
    public function parseShortcodes(string $template)
    {
        $result = $template;

        $result = preg_replace_callback('/\$\[.+\]/', array($this, "matchShortcodes"), $result);

        return $result;
    }

    public function matchShortcodes($matches)
    {
        //var_dump('START Shortcode: ' . $matches[0]);
        $index = 0;
        $chars = strlen($matches[0]);

        $openQuote = false;
        $openQuoteDouble = false;
        $parameters = [];
        $currentShortcodeValue = '$['; 

        $closed = false;

        for ($i = 2; $i < $chars; $i++) {
            $char = substr($matches[0], $i, 1);
            

            if ($char == '"') {
                $currentShortcodeValue .= $char; 
                if ($openQuote === true && $openQuoteDouble === true) {
                    $openQuote = false;
                    continue;
                }
                if ($openQuote === false) {
                    $openQuote = true;
                    $openQuoteDouble = true;

                    continue;
                }
            } elseif ($char == "'") {
                $currentShortcodeValue .= $char; 
                if ($openQuote === true && $openQuoteDouble === false) {
                    $openQuote = false;
                    continue;
                }
                if ($openQuote === false) {
                    $openQuote = true;
                    $openQuoteDouble = false;

                    continue;
                }
            } elseif ($char == ']' && !$openQuote) {
                $currentShortcodeValue .= $char; 
                $closed = true;
                break;
            }

            $currentShortcodeValue .= $char;
        }

        if($closed === false) {
            throw new \Exception('Shortcode not closed in string');
        }

        $shortcodeHandler = new SwVtTools_Shortcode_Helper($this->entity);
        $string = $shortcodeHandler->process($currentShortcodeValue);

        // var_dump(substr($matches[0], $i + 1));
        $replace = $string . substr($matches[0], $i + 1);
        
        if(strpos($replace, '$[', 2) !== false) {
            $replace = $this->parseShortcodes($replace);
        }
            
        return $replace;
        // return $string . 'S';
        // $string = $this->matchShortcodes($matches[0]);
        // var_dump($string);
        // var_dump($matches);
    }
}
