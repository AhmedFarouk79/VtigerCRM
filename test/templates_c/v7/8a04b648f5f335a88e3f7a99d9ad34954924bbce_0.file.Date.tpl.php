<?php
/* Smarty version 4.5.4, created on 2024-10-21 06:27:41
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/uitypes/Date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6715f45d133c27_10362915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a04b648f5f335a88e3f7a99d9ad34954924bbce' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Vtiger/uitypes/Date.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6715f45d133c27_10362915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('dateFormat', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'));
if ((!(isset($_smarty_tpl->tpl_vars['FIELD_NAME']->value)) || !$_smarty_tpl->tpl_vars['FIELD_NAME']->value)) {
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName());
}?><div class="input-group inputElement" style="margin-bottom: 3px"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" class="dateField form-control <?php if ($_smarty_tpl->tpl_vars['IGNOREUIREGISTRATION']->value) {?>ignore-ui-registration<?php }?>" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldtype="date" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }
if ((isset($_smarty_tpl->tpl_vars['MODE']->value)) && $_smarty_tpl->tpl_vars['MODE']->value == 'edit' && $_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'due_date') {?> data-user-changed-time="true" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"] == true) {?> data-rule-required="true" <?php }
if ((isset($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])) && php7_count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])) {?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>  data-rule-date="true" /><span class="input-group-addon"><i class="fa fa-calendar "></i></span></div>
<?php }
}
