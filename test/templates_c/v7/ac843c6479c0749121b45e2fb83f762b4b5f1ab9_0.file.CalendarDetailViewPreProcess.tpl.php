<?php
/* Smarty version 4.3.4, created on 2024-08-04 12:59:34
  from '/var/www/html/vtigercrm/dev/layouts/v7/modules/Users/CalendarDetailViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66af7b36526cf6_40512416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac843c6479c0749121b45e2fb83f762b4b5f1ab9' => 
    array (
      0 => '/var/www/html/vtigercrm/dev/layouts/v7/modules/Users/CalendarDetailViewPreProcess.tpl',
      1 => 1722776147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66af7b36526cf6_40512416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "CalendarDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}