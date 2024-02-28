<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

class Migration_DisableModules_Action extends Vtiger_Action_Controller {
	
	public function checkPermission(\Vtiger_Request $request) {
		global $current_user;
		$isAdmin = is_admin($current_user);
		if ($isAdmin == true) {
			return true;
		} else {
			throw new Exception('Permission Denied! Only admins can access');
		}
		return parent::checkPermission($request);
	}

	public function process(Vtiger_Request $request) {
		$modulesList = $request->get('modulesList');
		if ($modulesList) {
			$moduleManagerModel = new Settings_ModuleManager_Module_Model();
			foreach ($modulesList as $moduleName) {
				$moduleManagerModel->disableModule($moduleName);
			}
		}

		header('Location: migrate/index.php');
	}

}
