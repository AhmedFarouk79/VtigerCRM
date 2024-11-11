<?php
/* Smarty version 4.5.4, created on 2024-11-01 18:27:36
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Users/CalendarDetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67251d986cba49_28486401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82fd485891a7ca634038f7d4cbc097a5c3de0210' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Users/CalendarDetailViewHeader.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67251d986cba49_28486401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }
}
