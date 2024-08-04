<?php

// automatically determine current modulename
$className = basename(dirname(__DIR__)) . "_Module_Model";

if (!$className::isSetupEventExecution()) {
    var_dump("NOt executing");
    exit();
}
