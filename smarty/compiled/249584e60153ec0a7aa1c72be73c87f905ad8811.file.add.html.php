<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 02:20:32
         compiled from "application\views\private\berita\add.html" */ ?>
<?php /*%%SmartyHeaderCode:367357ebe3482a45c0-28380252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249584e60153ec0a7aa1c72be73c87f905ad8811' => 
    array (
      0 => 'application\\views\\private\\berita\\add.html',
      1 => 1475107864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367357ebe3482a45c0-28380252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebe3483c5704_27740933',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebe3483c5704_27740933')) {function content_57ebe3483c5704_27740933($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post" enctype="multipart/form-data">
">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
">
" readonly="readonly">
" class="form-control" size="50" maxlength="255" />
" class="tanggal form-control" size="10" maxlength="10" style="width:150px;" />

" size="100" maxlength="200" class="form-control" />
" class="form-control" size="50" maxlength="255" />

" size="100" maxlength="200" class="form-control" />
"  class="btn btn-primary">