<?php
/* Smarty version 4.3.4, created on 2024-08-04 14:35:24
  from '/var/www/html/vtigercrm/moduledev/layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66af91ac8e8ee7_79832823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b022ef7dd3b8248b0aceb53b1c120bd353bcebbb' => 
    array (
      0 => '/var/www/html/vtigercrm/moduledev/layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl',
      1 => 1722778488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66af91ac8e8ee7_79832823 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);
}
}
