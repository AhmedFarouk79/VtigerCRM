<?php
/* Smarty version 4.5.4, created on 2024-11-09 23:05:46
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Settings/MailConverter/EditHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672feacac79962_24442092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdc98078e964ff6f4ee13a7375d5c87371ec2693' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Settings/MailConverter/EditHeader.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672feacac79962_24442092 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="editViewPageDiv mailBoxEditDiv viewContent"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="hidden" id="create" value="<?php echo $_smarty_tpl->tpl_vars['CREATE']->value;?>
" /><input type="hidden" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" id="step" value="<?php echo $_smarty_tpl->tpl_vars['STEP']->value;?>
" /><h4><?php if ($_smarty_tpl->tpl_vars['CREATE']->value == 'new') {
echo vtranslate('LBL_ADDING_NEW_MAILBOX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo vtranslate('LBL_EDIT_MAILBOX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></h4><hr><div class="editViewContainer" style="padding-left: 2%;padding-right: 2%"><div class="row"><?php $_smarty_tpl->_assignInScope('BREADCRUMB_LABELS', array("step1"=>"MAILBOX_DETAILS","step2"=>"SELECT_FOLDERS"));
if ($_smarty_tpl->tpl_vars['CREATE']->value == 'new') {
$_tmp_array = isset($_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']) ? $_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['step3'] = 'ADD_RULES';
$_smarty_tpl->_assignInScope('BREADCRUMB_LABELS', $_tmp_array);
}
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0, true);
?></div><div class="clearfix"></div><?php }
}
