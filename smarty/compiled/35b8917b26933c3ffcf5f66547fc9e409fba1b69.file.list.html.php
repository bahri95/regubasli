<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:52:19
         compiled from "application\views\web\asosiasi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1845957ec9e0340ef77-88158411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b8917b26933c3ffcf5f66547fc9e409fba1b69' => 
    array (
      0 => 'application\\views\\web\\asosiasi\\list.html',
      1 => 1473302642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1845957ec9e0340ef77-88158411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_modul' => 0,
    'asosiasilist' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec9e03484283_35582510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec9e03484283_35582510')) {function content_57ec9e03484283_35582510($_smarty_tpl) {?><div class="row">

 $_from = $_smarty_tpl->tpl_vars['asosiasilist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo_asosiasi'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
" /></a>
 $_from = $_smarty_tpl->tpl_vars['asosiasilist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
">
" alt=""/>
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
