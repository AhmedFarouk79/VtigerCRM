<?php
/* Smarty version 4.5.4, created on 2024-11-11 03:13:08
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Settings/Vtiger/OutgoingServerDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67317644e8afc2_77712208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ec5a0ac1c0d3aa80aad1be749eecbb3a758518' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Settings/Vtiger/OutgoingServerDetail.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67317644e8afc2_77712208 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="detailViewContainer" id="OutgoingServerDetails"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="clearfix"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h3 style="margin-top: 0px;"><?php echo vtranslate('LBL_OUTGOING_SERVER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class="btn-group pull-right"><button class="btn btn-default editButton" data-url='<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getEditViewUrl();?>
' type="button" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div><div><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'));?><div class="block"><div><h4><?php echo vtranslate('LBL_MAIL_SERVER_SMTP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><hr><table class="table editview-table no-border"><tbody><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"style="width:25%" ><label><?php echo vtranslate('LBL_SERVER_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue"><span><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server');?>
</span></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel" ><label><?php echo vtranslate('LBL_USER_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue" ><span><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('server_username');?>
</span></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="border-left: none;"><span class="password"><?php if ($_smarty_tpl->tpl_vars['MODEL']->value->get('server_password') != '') {?>******<?php }?>&nbsp;</span></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_FROM_EMAIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue"><span><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->get('from_email_field');?>
</span></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldLabel"><label><?php echo vtranslate('LBL_REQUIRES_AUTHENTICATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 fieldValue"><span><?php if ($_smarty_tpl->tpl_vars['MODEL']->value->isSmtpAuthEnabled()) {
echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php } else {
echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></span></td></tr></tbody></table></div></div></div></div>
<?php }
}
