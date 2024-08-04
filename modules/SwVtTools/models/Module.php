<?php
class SwVtTools_Module_Model extends Vtiger_Module_Model {

	public static $SetupEventExecution = false;
	
	public const BUILD_DATETIME = "2024-08-04-16-17";

	public static function isSetupEventExecution() {
		return self::$SetupEventExecution === true;
	}
}