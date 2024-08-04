<?php
/* Smarty version 4.3.4, created on 2024-08-04 12:59:34
  from '/var/www/html/vtigercrm/dev/layouts/v7/modules/Users/CalendarDetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66af7b36554a55_49753331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '305d2b17f7cc8c129e20bb6f9ed1eae6a57cdf68' => 
    array (
      0 => '/var/www/html/vtigercrm/dev/layouts/v7/modules/Users/CalendarDetailViewHeader.tpl',
      1 => 1722776147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66af7b36554a55_49753331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }
}
