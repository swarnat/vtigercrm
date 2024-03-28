<?php
if (defined('VTIGER_UPGRADE')) {
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING);
ini_set('display_errors', 'On');
include_once 'include/utils/utils.php';
include_once 'includes/runtime/Viewer.php';
include_once 'includes/runtime/LanguageHandler.php';
global $adb, $current_user;
    $db = PearDatabase::getInstance();

    $db->pquery('ALTER TABLE com_vtiger_workflows MODIFY COLUMN schannualdates VARCHAR(500)', array());
}