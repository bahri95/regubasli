<?php /* Smarty version Smarty-3.1.17, created on 2016-09-30 00:47:20
         compiled from "application/views/web/opini/list.html" */ ?>
<?php /*%%SmartyHeaderCode:194506916057edee58d85fb5-45537061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b32be9b37d666752eb178a40bfe7a4ab524a038f' => 
    array (
      0 => 'application/views/web/opini/list.html',
      1 => 1473324248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194506916057edee58d85fb5-45537061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opini_list' => 0,
    'rs' => 0,
    'page_modul' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57edee58e36734_50207763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57edee58e36734_50207763')) {function content_57edee58e36734_50207763($_smarty_tpl) {?><div class="l-inner-page-container">
 $_from = $_smarty_tpl->tpl_vars['opini_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
" class="f-primary-l f-title-big f-blog__title"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>




" class="b-btn f-btn b-btn-md b-btn-default f-primary-b"><?php echo $_smarty_tpl->tpl_vars['label']->value['selengkapnya'];?>

