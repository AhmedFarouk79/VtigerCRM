<?php
/* Smarty version 4.5.4, created on 2024-10-20 06:37:24
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/QuickViewCommentsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6714a524bd3f40_41803522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '964915baf21b10d5e7f121dda42734b8f80a8b54' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/QuickViewCommentsList.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6714a524bd3f40_41803522 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('COMMENT_TEXTAREA_DEFAULT_ROWS', "2");?>
<div class = "summaryWidgetContainer">
    <div class="recentComments">
        <div class="commentsBody container-fluid" style = "height:100%">
            <?php if (!empty($_smarty_tpl->tpl_vars['COMMENTS']->value)) {?>
                <div class="recentCommentsBody row">
                    <br>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMMENTS']->value, 'COMMENT', false, 'index');
$_smarty_tpl->tpl_vars['COMMENT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['COMMENT']->value) {
$_smarty_tpl->tpl_vars['COMMENT']->do_else = false;
?>
                        <?php ob_start();
echo decode_html($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedByName());
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('CREATOR_NAME', $_prefixVariable7);?>
                        <div class="commentDetails">
                            <div class="singleComment">
                                <?php $_smarty_tpl->_assignInScope('PARENT_COMMENT_MODEL', $_smarty_tpl->tpl_vars['COMMENT']->value->getParentCommentModel());?>
                                <?php $_smarty_tpl->_assignInScope('CHILD_COMMENTS_MODEL', $_smarty_tpl->tpl_vars['COMMENT']->value->getChildComments());?>
                                <div class="container-fluid">
                                    <div class="row">
                                         <div class="col-lg-2 recordImage commentInfoHeader" data-commentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
" data-parentcommentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('parent_comments');?>
" data-relatedto = "<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to');?>
">
                                            <?php $_smarty_tpl->_assignInScope('IMAGE_PATH', $_smarty_tpl->tpl_vars['COMMENT']->value->getImagePath());?>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_PATH']->value)) {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
" width="100%" height="100%" align="left">
                                                <?php } else { ?>
                                                    <div class="name"><span><strong> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( $_smarty_tpl->tpl_vars['CREATOR_NAME']->value,0,2 ));?>
 </strong></span></div>
                                                <?php }?>
                                        </div>
                                        <div class="comment col-lg-10">
                                            <span class="creatorName">
                                                <?php echo $_smarty_tpl->tpl_vars['CREATOR_NAME']->value;?>

                                            </span>&nbsp;&nbsp;
                                            <div class="">
                                                <span class="commentInfoContent">
                                                    <?php echo nl2br($_smarty_tpl->tpl_vars['COMMENT']->value->get('commentcontent'));?>

                                                </span>
                                            </div>
                                            <br>
                                            <div class="commentActionsContainer">      
                                                <span class="commentTime pull-right">
                                                    <p class="muted"><small title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime());?>
"><?php echo Vtiger_Util_Helper::formatDateAndDateDiffInString($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime());?>
</small></p>
                                                </span>
                                            </div>
                                            <div style="margin-top:5px;">
												<?php $_smarty_tpl->_assignInScope('FILE_DETAILS', $_smarty_tpl->tpl_vars['COMMENT']->value->getFileNameAndDownloadURL());?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILE_DETAILS']->value, 'FILE_DETAIL', false, 'index');
$_smarty_tpl->tpl_vars['FILE_DETAIL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['FILE_DETAIL']->value) {
$_smarty_tpl->tpl_vars['FILE_DETAIL']->do_else = false;
?>
                                                    <?php $_smarty_tpl->_assignInScope('FILE_NAME', $_smarty_tpl->tpl_vars['FILE_DETAIL']->value['trimmedFileName']);?>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['FILE_NAME']->value)) {?>
                                                        <a onclick="Vtiger_List_Js.previewFile(event,<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('id');?>
,<?php echo $_smarty_tpl->tpl_vars['FILE_DETAIL']->value['attachmentId'];?>
);" data-filename="<?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
" href="javascript:void(0)" name="viewfile">
                                                            <span title="<?php echo $_smarty_tpl->tpl_vars['FILE_DETAILS']->value['rawFileName'];?>
" style="line-height:1.5em;"><?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
</span>&nbsp
                                                        </a>
                                                        <br>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "NoComments.tpl" )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
