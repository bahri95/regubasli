<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 05:02:11
         compiled from "application/views/web/beritadmsi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:178971914857ea3593618765-32915414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b57999f1076e04230fdfa9d67a6c2a2c1e7640' => 
    array (
      0 => 'application/views/web/beritadmsi/list.html',
      1 => 1473324246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178971914857ea3593618765-32915414',
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
  'unifunc' => 'content_57ea359377f996_43841042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea359377f996_43841042')) {function content_57ea359377f996_43841042($_smarty_tpl) {?><div class="row j-masonry b-col-default-indent">
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>



">

