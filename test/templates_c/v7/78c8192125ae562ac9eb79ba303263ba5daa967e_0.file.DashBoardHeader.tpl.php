<?php
/* Smarty version 4.3.4, created on 2024-08-04 13:39:58
  from '/var/www/html/vtigercrm/moduledev/layouts/v7/modules/Vtiger/dashboards/DashBoardHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66af84ae30f251_36032654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78c8192125ae562ac9eb79ba303263ba5daa967e' => 
    array (
      0 => '/var/www/html/vtigercrm/moduledev/layouts/v7/modules/Vtiger/dashboards/DashBoardHeader.tpl',
      1 => 1722778488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66af84ae30f251_36032654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vtigercrm/moduledev/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class='dashboardHeading container-fluid'>
	<div class="buttonGroups pull-right">
		<div class="btn-group">
			<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SELECTABLE_WIDGETS']->value) > 0) {?>
				<button class='btn btn-default addButton dropdown-toggle' data-toggle='dropdown'>
					<?php echo vtranslate('LBL_ADD_WIDGET');?>
&nbsp;&nbsp;<i class="caret"></i>
				</button>

				<ul class="dropdown-menu dropdown-menu-right widgetsList pull-right" style="min-width:100%;text-align:left;">
					<?php $_smarty_tpl->_assignInScope('MINILISTWIDGET', '');?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTABLE_WIDGETS']->value, 'WIDGET');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->getName() == 'MiniList') {?>
							<?php $_smarty_tpl->_assignInScope('MINILISTWIDGET', $_smarty_tpl->tpl_vars['WIDGET']->value);?> 						<?php } elseif ($_smarty_tpl->tpl_vars['WIDGET']->value->getName() == 'Notebook') {?>
							<?php $_smarty_tpl->_assignInScope('NOTEBOOKWIDGET', $_smarty_tpl->tpl_vars['WIDGET']->value);?> 						<?php } else { ?>
							<li>
								<a onclick="Vtiger_DashBoard_Js.addWidget(this, '<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
')" href="javascript:void(0);"
									data-linkid="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
">
									<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a>
							</li>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					<?php if ($_smarty_tpl->tpl_vars['MINILISTWIDGET']->value && $_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Home') {?>
						<li class="divider"></li>
						<li>
							<a onclick="Vtiger_DashBoard_Js.addMiniListWidget(this, '<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getUrl();?>
')" href="javascript:void(0);"
								data-linkid="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getHeight();?>
">
								<?php echo vtranslate($_smarty_tpl->tpl_vars['MINILISTWIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a>
						</li>
						<li>
							<a onclick="Vtiger_DashBoard_Js.addNoteBookWidget(this, '<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getUrl();?>
')" href="javascript:void(0);"
								data-linkid="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getName();?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getHeight();?>
">
								<?php echo vtranslate($_smarty_tpl->tpl_vars['NOTEBOOKWIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a>
						</li>
					<?php }?>

				</ul>
			<?php } elseif ($_smarty_tpl->tpl_vars['MODULE_PERMISSION']->value) {?>
				<button class='btn btn-default addButton dropdown-toggle' disabled="disabled" data-toggle='dropdown'>
					<strong><?php echo vtranslate('LBL_ADD_WIDGET');?>
</strong> &nbsp;&nbsp;
					<i class="caret"></i>
				</button>
			<?php }?>
		</div>
	</div>
</div>
<?php }
}