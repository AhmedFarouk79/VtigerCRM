<?php
/* Smarty version 4.5.4, created on 2024-11-06 01:03:06
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/PopupNavigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672ac04a46ccf9_45293133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8bcca2df46f12464cc974d548cef2c38ca39365' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/PopupNavigation.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672ac04a46ccf9_45293133 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-2"><?php if ((isset($_smarty_tpl->tpl_vars['MULTI_SELECT']->value)) && $_smarty_tpl->tpl_vars['MULTI_SELECT']->value) {
if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value)) {?><button class="select btn btn-default" disabled="disabled"><strong><?php echo vtranslate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
} else { ?>&nbsp;<?php }?></div><div class="col-md-10"><?php $_smarty_tpl->_assignInScope('RECORD_COUNT', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value);
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SHOWPAGEJUMP'=>true), 0, true);
?></div>
<?php }
}
