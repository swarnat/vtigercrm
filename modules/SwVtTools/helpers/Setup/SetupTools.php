<?php

class SwVtTools_SetupTools_Helper {
/*
    public function removeHeaderLink() {
        $adb = PearDatabase::getInstance();

        $sql = "DELETE FROM vtiger_links WHERE linktype = 'HEADERSCRIPT' AND linklabel = 'SwVtTools'";
        $adb->query($sql);

    }

    public function AddHeaderLink() {
        $adb = PearDatabase::getInstance();

        $sql = "DELETE FROM vtiger_links WHERE linktype = 'HEADERSCRIPT' AND (linklabel = 'SwVtTools')";
        $result = $adb->query($sql);

        $moduleModel = Vtiger_Module_Model::getInstance("SwVtTools");
        require_once('vtlib/Vtiger/Module.php');
        $link_module = Vtiger_Module::getInstance("SwVtTools");
        $link_module->addLink('HEADERSCRIPT','SwVtTools',"modules/SwVtTools/resources/frontend.js?v1=".$moduleModel->version, "", "1");
    }

    public function checkSettingsField() {
        global $adb;

        $sql = "SELECT * FROM vtiger_settings_field WHERE linkto = 'index.php?module=SwVtTools&view=Index&parent=Settings'";
        $result = $adb->query($sql);

        if($adb->num_rows($result) == 0) {
            $fieldid = $adb->getUniqueID('vtiger_settings_field');
            $blockid = getSettingsBlockId('LBL_OTHER_SETTINGS');
            $seq_res = $adb->pquery("SELECT max(sequence) AS max_seq FROM vtiger_settings_field WHERE blockid = ?", array($blockid));
            if ($adb->num_rows($seq_res) > 0) {
                $cur_seq = $adb->query_result($seq_res, 0, 'max_seq');
                if ($cur_seq != null)	$cur_seq = $cur_seq + 1;
            }
              $adb->pquery('INSERT INTO vtiger_settings_field(fieldid, blockid, name, iconpath, description, linkto, sequence)
                  VALUES (?,?,?,?,?,?,?)', array($fieldid, $blockid, 'Vtiger Tools', '', 'Enhance your CRM', 'index.php?module=SwVtTools&view=Index&parent=Settings', $cur_seq));
        }
    }    
*/

}