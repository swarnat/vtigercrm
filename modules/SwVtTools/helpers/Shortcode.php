<?php

class SwVtTools_Shortcode_Helper {
    /**
     * Entity to use within template
     *
     * @var \Vtiger_Record_Model
     */
    private $entity;

    /**
     * @param \SwVtTools_RecordValues_Interface  $record
     */
    public function __construct($record)
    {
        $this->entity = $record;
    }
    
    public function process($string)
    {
        // var_dump('Process ' . $string);

        $chars = strlen($string) - 1;

        $openQuote = false;
        $openQuoteDouble = false;
        $parameters = [];
        $currentParameterValue = null;

        for ($i = 2; $i < $chars; $i++) {
            $char = substr($string, $i, 1);

            if ($char == '"') {
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
                $currentParameterValue .= $char; 

                break;
            } elseif ($char == ',' && !$openQuote) {
                $parameters[] = $currentParameterValue;
                $currentParameterValue = null;
                continue;
            }

            if ($currentParameterValue === null) $currentParameterValue = '';

            $currentParameterValue .= $char;
            // $replace .= $char;
        }

        if ($currentParameterValue !== null) {
            $parameters[] = $currentParameterValue;
        }

        $shortcodeName = ucfirst(preg_replace('/[^a-z0-9_]/', '', strtolower($parameters[0])));

        $shortcodeClass = 'SwVtTools_' . $shortcodeName . '_Shortcode';
        // var_dump('Class:',$shortcodeClass, $parameters);

        // first index is shortcode name, we do not need
        array_shift($parameters);

        if(method_exists($shortcodeClass, 'process')){
            return call_user_func([$shortcodeClass, 'process'], $this->entity, $parameters);
        } else {
            return '';
        }
        
    }
    
}