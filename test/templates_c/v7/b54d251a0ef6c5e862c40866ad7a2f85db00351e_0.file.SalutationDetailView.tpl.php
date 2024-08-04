<?php
/* Smarty version 4.3.4, created on 2024-08-04 13:01:17
  from '/var/www/html/vtigercrm/dev/layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66af7b9d189fa0_88670538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b54d251a0ef6c5e862c40866ad7a2f85db00351e' => 
    array (
      0 => '/var/www/html/vtigercrm/dev/layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl',
      1 => 1722776147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66af7b9d189fa0_88670538 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);
}
}
