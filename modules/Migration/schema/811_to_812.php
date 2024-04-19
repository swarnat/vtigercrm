<?php
if (defined('VTIGER_UPGRADE')) {
    global $adb, $current_user;
    $db = PearDatabase::getInstance();

    // Increase column length to hold longer JSONified value.
    $db->pquery('ALTER TABLE com_vtiger_workflows MODIFY COLUMN schannualdates VARCHAR(500)', array());

    // Trim the space in value.
    $db->pquery('UPDATE vtiger_projecttaskstatus set projecttaskstatus = "Canceled" where projecttaskstatus = "Canceled "', array());

    // Ensure related-tab for ModComments on Inventory modules (if missed in previous migration)
    $modCommentsInstance = Vtiger_Module_Model::getInstance('ModComments');
	$modCommentFieldInstance = Vtiger_Field_Model::getInstance('related_to', $modCommentsInstance);
	foreach(getInventoryModules() as $refModuleName) {
    	$refModuleModel = Vtiger_Module_Model::getInstance($refModuleName);
    	$rs = $db->pquery("SELECT 1 FROM vtiger_relatedlists WHERE tabid=? and related_tabid=? and relationfieldid=? limit 1", array(
       		$refModuleModel->id, $modCommentsInstance->id, $modCommentFieldInstance->id
    	));
    	if (!$db->num_rows($rs)) {
        	$refModuleModel->setRelatedList($modCommentsInstance, "ModComments", '', 'get_comments', $modCommentFieldInstance->id);
    	}
	}

}
