<?php
/* Smarty version 4.5.4, created on 2024-11-10 16:18:35
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/HelpDeskSummaryWidgetContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6730dcdb03cde5_74801802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60f42688ff6ac385233f5295c4437b30cd43cdd0' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/HelpDeskSummaryWidgetContents.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6730dcdb03cde5_74801802 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD');
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = false;
?><div class="recentActivitiesContainer"><ul class="unstyled"><li><div><div class="textOverflowEllipsis width27em"><?php echo vtranslate('Title',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :<span><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
" title="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('ticket_title');?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
_Related_Record_<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('id');?>
"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('ticket_title');?>
</a></span></div><div><?php echo vtranslate('LBL_TICKET_PRIORITY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <strong> <?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue('ticketpriorities');?>
</strong> </div><?php $_smarty_tpl->_assignInScope('DESCRIPTION', ((string)$_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDescriptionValue()));
if (!empty($_smarty_tpl->tpl_vars['DESCRIPTION']->value)) {?><div class="row"><span class="col-lg-8 textOverflowEllipsis width27em"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
</span><span class="col-lg-3"><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></div><?php }?></div></li></ul></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('NUMBER_OF_RECORDS', php7_count($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value));
if ($_smarty_tpl->tpl_vars['NUMBER_OF_RECORDS']->value == 5) {?><div class="row"><div class="pull-right"><a class="moreRecentTickets cursorPointer"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div></div><?php }
}
}
