<?php
/* Smarty version 4.5.4, created on 2024-10-19 09:30:05
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Settings/Picklist/Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67137c1d0ba852_73066848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '059951ab9dab7d04b8358d13da043ea5a9a3cbd6' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Settings/Picklist/Index.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67137c1d0ba852_73066848 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="listViewPageDiv detailViewContainer " id="listViewContent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal" >
        <br>
        <div class="detailViewInfo">
            <div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel">
                    <label class="fieldLabel "><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </label>
                </div>
                <div class="fieldValue col-sm-3 col-xs-3">
                    <select class="select2 inputElement" id="pickListModules" name="pickListModules">
                        <option value=""><?php echo vtranslate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_MODULES']->value, 'PICKLIST_MODULE');
$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->do_else = false;
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value == $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name')) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name'),$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name'));?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div>

        <div id="modulePickListContainer">
            <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModulePickListDetail.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <br>
        <div id="modulePickListValuesContainer">
            <?php if (empty($_smarty_tpl->tpl_vars['NO_PICKLIST_FIELDS']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "PickListValueDetail.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        </div>

    </div>
</div><?php }
}
