<?php
/* Smarty version 4.3.4, created on 2024-08-04 13:02:04
  from '/var/www/html/vtigercrm/dev/layouts/v7/modules/Settings/Vtiger/TaxRegions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66af7bcc95eaa3_00647823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d825099ed8988ea5730a5ccfc1a96467b8a592f' => 
    array (
      0 => '/var/www/html/vtigercrm/dev/layouts/v7/modules/Settings/Vtiger/TaxRegions.tpl',
      1 => 1722776147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66af7bcc95eaa3_00647823 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="taxRegionsContainer"><div class="tab-pane active"><div class="tab-content overflowVisible"><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'));?><div class="col-lg-4 marginLeftZero textOverflowEllipsis"><div class="marginBottom10px"><button type="button" class="btn btn-default addRegion addButton module-buttons" data-url="?module=Vtiger&parent=Settings&view=TaxAjax&mode=editTaxRegion" data-type="1"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_NEW_REGION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><table class="table table-bordered taxRegionsTable" style="table-layout: fixed"><tr><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" colspan="2"><strong><?php echo vtranslate('LBL_AVAILABLE_REGIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAX_REGIONS']->value, 'TAX_REGION_MODEL');
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('TAX_REGION_NAME', $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName());?><tr class="opacity" data-key-name="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_NAME']->value;?>
" data-key="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_NAME']->value;?>
"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none;"><span class="taxRegionName"><?php echo $_smarty_tpl->tpl_vars['TAX_REGION_NAME']->value;?>
</span></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-right:none;border-left:none"><div class="pull-right actions"><a class="editRegion" data-url='<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getEditRegionUrl();?>
'><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="fa fa-pencil alignMiddle"></i></a>&nbsp;&nbsp;<a class="deleteRegion" data-url='<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getDeleteRegionUrl();?>
'><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></a></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div><div class="col-lg-2">&nbsp;</div><div class="col-lg-7"><br><br><br><div class=""><div class="col-lg-1"><i class="fa fa-info-circle"></i></div><div class="col-lg-11"><?php echo vtranslate('LBL_TAX_REGION_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div></div></div></div><?php }
}
