<?php

// automatically determine current modulename
$className = basename(dirname(__DIR__)) . "_Module_Model";

if (!$className::isSetupEventExecution()) {
    throw new Exception("Setup Event Handler cannot called directory");
}
