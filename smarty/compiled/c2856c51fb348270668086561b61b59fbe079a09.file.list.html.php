<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:30:19
         compiled from "application/views/web/sponsor/list.html" */ ?>
<?php /*%%SmartyHeaderCode:52648641657e9f5db88bb52-70904374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2856c51fb348270668086561b61b59fbe079a09' => 
    array (
      0 => 'application/views/web/sponsor/list.html',
      1 => 1474035012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52648641657e9f5db88bb52-70904374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_list' => 0,
    'rs' => 0,
    'act_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f5db8f99b7_42335772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f5db8f99b7_42335772')) {function content_57e9f5db8f99b7_42335772($_smarty_tpl) {?> <section class="container b-welcome-box">
 $_from = $_smarty_tpl->tpl_vars['sponsor_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
'>
' class='b-btn f-btn b-btn-light f-btn-light fancybox info'
'
'