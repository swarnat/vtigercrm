<?php

class SwVtTools_Entity_Test implements SwVtTools_RecordValues_Interface {

    private $recordData;
    public function __construct($recordData = []) {
        $this->recordData = $recordData;
    }

    public function get($fieldName) {
        return $this->recordData[$fieldName];
    }
    public function set($fieldName, $value) {
        $this->recordData[$fieldName] = $value;
    }
    
    public function getReference($fieldName): SwVtTools_RecordValues_Interface {
        return new self($this->recordData[$fieldName]);
    }
}