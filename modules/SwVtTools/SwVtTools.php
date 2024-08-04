<?php

class SwVtTools {

	function vtlib_handler($modulename, $event_type) {

		if(!defined("DS")) define("DS", DIRECTORY_SEPARATOR);

		switch($event_type) {
			case Vtiger_Module::EVENT_MODULE_ENABLED:		// module.enabled
			case Vtiger_Module::EVENT_MODULE_DISABLED:		// module.disabled
			case Vtiger_Module::EVENT_MODULE_PREUPDATE:		// module.preupdate
			case Vtiger_Module::EVENT_MODULE_POSTUPDATE:	// module.postupdate
			case Vtiger_Module::EVENT_MODULE_POSTINSTALL:	// module.postinstall
			case Vtiger_Module::EVENT_MODULE_PREUNINSTALL:	// module.preuninstall

				// We make sure, eventhandlers are only executed during setup
				SwVtTools_Module_Model::$SetupEventExecution = true;

				if(is_file(__DIR__ . DS .  "eventhandler" . DS . $event_type. ".php")) {
					require_once(__DIR__ . DS .  "eventhandler" . DS . $event_type. ".php");
				}
		
				SwVtTools_Module_Model::$SetupEventExecution = false;

				break;
		}

		

	}

}
