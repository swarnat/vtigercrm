<?php

class SwVtTools_Echo_Shortcode implements SwVtTools_ShortcodeHandler_Interface {

    public static function process(SwVtTools_RecordValues_Interface $record, array $parameters = []): string
    {
        return $parameters[0];
    }

}