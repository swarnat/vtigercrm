<?php
/* Smarty version 4.3.4, created on 2024-08-04 14:35:24
  from '/var/www/html/vtigercrm/moduledev/layouts/v7/modules/Vtiger/DetailViewActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66af91ac84c4f1_27940236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40207874dcefc43c75b5377e085eb45251cd8a3c' => 
    array (
      0 => '/var/www/html/vtigercrm/moduledev/layouts/v7/modules/Vtiger/DetailViewActions.tpl',
      1 => 1722778488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66af91ac84c4f1_27940236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vtigercrm/moduledev/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="col-lg-6 detailViewButtoncontainer"><div class="pull-right btn-toolbar"><div class="btn-group"><?php $_smarty_tpl->_assignInScope('STARRED', $_smarty_tpl->tpl_vars['RECORD']->value->get('starred'));
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isStarredEnabled()) {?><button class="btn btn-default markStar <?php if ($_smarty_tpl->tpl_vars['STARRED']->value) {?> active <?php }?>" id="starToggle" style="width:100px;"><div class='starredStatus' title="<?php echo vtranslate('LBL_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><div class='unfollowMessage'><i class="fa fa-star-o"></i> &nbsp;<?php echo vtranslate('LBL_UNFOLLOW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='followMessage'><i class="fa fa-star active"></i> &nbsp;<?php echo vtranslate('LBL_FOLLOWING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class='unstarredStatus' title="<?php echo vtranslate('LBL_NOT_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate('LBL_FOLLOW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></button><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWBASIC'], 'DETAIL_VIEW_BASIC_LINK');
$_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value) {
$_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->do_else = false;
?><button class="btn btn-default" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel());?>
"<?php if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->isPageLoadLink()) {?>onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'"<?php } else { ?>onclick="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getUrl();?>
"<?php }
if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Documents' && $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel() == 'LBL_VIEW_FILE') {?>data-filelocationtype="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->get('filelocationtype');?>
" data-filename="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->get('filename');?>
"<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEW']) && (smarty_modifier_count($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEW']) > 0)) {?><button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;&nbsp;<i class="caret"></i></button><ul class="dropdown-menu dropdown-menu-right"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEW'], 'DETAIL_VIEW_LINK');
$_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value) {
$_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->do_else = false;
if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel() == '') {?><li class="divider"></li><?php } else { ?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_moreAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel());?>
"><?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strstr' ][ 0 ], array( $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl(),"javascript" ))) {?><a href='<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl();?>
'><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php } else { ?><a href='<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
' ><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php }?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></div><?php ob_start();
echo $_smarty_tpl->tpl_vars['NO_PAGINATION']->value;
$_prefixVariable3 = ob_get_clean();
if (!$_prefixVariable3) {?><div class="btn-group pull-right"><button class="btn btn-default " id="detailViewPreviousRecordButton" <?php if (empty($_smarty_tpl->tpl_vars['PREVIOUS_RECORD_URL']->value)) {?> disabled="disabled" <?php } else { ?> onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['PREVIOUS_RECORD_URL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'" <?php }?> ><i class="fa fa-chevron-left"></i></button><button class="btn btn-default  " id="detailViewNextRecordButton"<?php if (empty($_smarty_tpl->tpl_vars['NEXT_RECORD_URL']->value)) {?> disabled="disabled" <?php } else { ?> onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['NEXT_RECORD_URL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'" <?php }?>><i class="fa fa-chevron-right"></i></button></div><?php }?></div><input type="hidden" name="record_id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"></div><?php }
}
