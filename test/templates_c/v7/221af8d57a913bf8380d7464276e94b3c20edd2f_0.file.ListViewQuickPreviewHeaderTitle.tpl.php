<?php
/* Smarty version 4.5.4, created on 2024-10-20 06:37:24
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6714a524a76578_24048039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '221af8d57a913bf8380d7464276e94b3c20edd2f' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/ListViewQuickPreviewHeaderTitle.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6714a524a76578_24048039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('QUICK_PREVIEW', "true");
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0, true);
}
}
