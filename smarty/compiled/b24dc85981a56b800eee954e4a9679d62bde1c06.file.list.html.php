<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:10:54
         compiled from "application/views/web/beritaanggota/list.html" */ ?>
<?php /*%%SmartyHeaderCode:86200928057e9ff5e2eeab8-10948664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b24dc85981a56b800eee954e4a9679d62bde1c06' => 
    array (
      0 => 'application/views/web/beritaanggota/list.html',
      1 => 1473324244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86200928057e9ff5e2eeab8-10948664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'berita_list' => 0,
    'rs' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ff5e5355e8_10994093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ff5e5355e8_10994093')) {function content_57e9ff5e5355e8_10994093($_smarty_tpl) {?><div class="row j-masonry b-col-default-indent">
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>



">
 
