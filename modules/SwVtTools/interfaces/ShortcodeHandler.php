<?php

interface SwVtTools_ShortcodeHandler_Interface {
    
    public static function process(\SwVtTools_RecordValues_Interface $record, array $parameters = []): string;

}