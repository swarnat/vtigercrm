<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Settings_SwVtTools_Index_View extends Settings_Vtiger_Index_View
{

    public function process(Vtiger_Request $request)
    {
        $moduleName = $request->getModule();
        
        /** 
         * @var SwVtTools_Module_Model $moduleModel 
         **/
        $moduleModel = Vtiger_Module_Model::getInstance($moduleName);

        $viewer = $this->getViewer($request);
        $viewer->assign("VERSION", $moduleModel->version);

        parent::process($request);
    }
    public function getHeaderCss(Vtiger_Request $request)
    {
        $moduleName = $request->getModule();

        /** 
         * @var SwVtTools_Module_Model $moduleModel 
         **/
        $moduleModel = Vtiger_Module_Model::getInstance($moduleName);
        $buildDatetime = $moduleModel::BUILD_DATETIME;

        $headerCssInstances = parent::getHeaderCss($request);

        $cssFileNames = array(
            "~/modules/" . $moduleName . "/resources/css/settings.css",
        );

        /** @var Vtiger_CssScript_Model[] $cssInstances */
        $cssInstances = $this->checkAndConvertCssStyles($cssFileNames);

        foreach($cssInstances as $instance) {
            $href = $instance->getHref();
            $instance->set('href', $href . '?c=' . $buildDatetime);
        }

        $headerCssInstances = array_merge($headerCssInstances, $cssInstances);

        return $headerCssInstances;
    }
}
