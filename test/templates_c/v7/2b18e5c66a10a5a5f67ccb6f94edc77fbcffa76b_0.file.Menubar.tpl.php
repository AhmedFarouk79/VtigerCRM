<?php
/* Smarty version 4.5.4, created on 2024-10-19 13:20:31
  from '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Documents/partials/Menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6713b21fde4d93_87381330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b18e5c66a10a5a5f67ccb6f94edc77fbcffa76b' => 
    array (
      0 => '/home1/rxgenumy/public_html/mycrm/layouts/v7/modules/Documents/partials/Menubar.tpl',
      1 => 1727651112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6713b21fde4d93_87381330 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['REQ']->value->get('view') == 'Detail') {?>
<div id="modules-menu" class="modules-menu">    
    <ul>
        <li class="active">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl();?>
">
				<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>

                <span><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</span>
            </a>
        </li>
    </ul>
</div>
<?php }
}
}
