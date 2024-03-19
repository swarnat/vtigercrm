<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *********************************************************************************/

if (defined('VTIGER_UPGRADE')) {
	
	//updating the config file
	$fileName = 'config.inc.php';
	if (file_exists($fileName)) {
		// Read the contents of the file
		$completeData = file_get_contents('config.inc.php');
		$pattern = "/upload_badext\s*=+\s*array\(?...+\);/i";

		if (preg_match($pattern, $completeData, $matches)) {
			$arrayString = $matches[0];
			$content = '/htaccess/i';

			if (!preg_match($content, $arrayString)) {
				$updateStringPattern = "/upload_badext\s*=+\s*array\(?...+'/i";
				preg_match($updateStringPattern,$completeData,$matches);
				$updatedContent = preg_replace($updateStringPattern, "$matches[0],'htaccess'", $completeData);
				//Put the new contents into the file
				file_put_contents($fileName, $updatedContent);
			}
		}
	}
}
