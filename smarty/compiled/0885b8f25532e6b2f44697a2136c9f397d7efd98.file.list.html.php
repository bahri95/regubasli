<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:22:50
         compiled from "application/views/web/download/list.html" */ ?>
<?php /*%%SmartyHeaderCode:176530965357eceb7a29f115-27499325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0885b8f25532e6b2f44697a2136c9f397d7efd98' => 
    array (
      0 => 'application/views/web/download/list.html',
      1 => 1473324246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176530965357eceb7a29f115-27499325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_modul' => 0,
    'download_list' => 0,
    'no' => 0,
    'rs' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57eceb7a30eb77_13009602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eceb7a30eb77_13009602')) {function content_57eceb7a30eb77_13009602($_smarty_tpl) {?><div class="col-md-9">
 
 $_from = $_smarty_tpl->tpl_vars['download_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>

"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>


" class="button-xs button-yellow">
