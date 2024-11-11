<?php
/* Smarty version 4.5.4, created on 2024-10-31 12:28:56
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Rss/RssAddForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6723780834d768_21619718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00b67df40b977c072d26441dea57b1e26eed220b' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Rss/RssAddForm.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6723780834d768_21619718 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='modal-dialog' id="rssAddFormUi"><div class="modal-content"><?php ob_start();
echo vtranslate('LBL_ADD_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('HEADER_TITLE', $_prefixVariable1);
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0, true);
?><form class="form-horizontal" id="rssAddForm" method="post" action="index.php" ><div class="modal-body"><div class="row"><div class="col-lg-12"><div class="col-lg-4 fieldLabel"><label><?php echo vtranslate('LBL_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-8 fieldValue"><input class="form-control" type="text" id="feedurl" name="feedurl" data-rule-required="true" data-rule-url="true" value="" placeholder="<?php echo vtranslate('LBL_ENTER_FEED_SOURCE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div>
<?php }
}
