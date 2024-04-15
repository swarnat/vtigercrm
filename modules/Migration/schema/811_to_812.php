<?php
if (defined('VTIGER_UPGRADE')) {
global $adb, $current_user;
    $db = PearDatabase::getInstance();

    $db->pquery('UPDATE vtiger_projecttaskstatus set projecttaskstatus = "Canceled" where projecttaskstatus = "Canceled "', array());
}
