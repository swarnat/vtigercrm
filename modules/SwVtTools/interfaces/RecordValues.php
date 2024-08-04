<?php

interface SwVtTools_RecordValues_Interface {
    
    public function get($field);
    public function set($field, $value);
    
    public function getReference($fieldName): SwVtTools_RecordValues_Interface;
}