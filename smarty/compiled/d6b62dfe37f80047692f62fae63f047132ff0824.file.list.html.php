<?php /* Smarty version Smarty-3.1.17, created on 2016-09-28 18:55:11
         compiled from "application\views\private\video\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1442757ebf5ef2a70c3-58020718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6b62dfe37f80047692f62fae63f047132ff0824' => 
    array (
      0 => 'application\\views\\private\\video\\list.html',
      1 => 1473302640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442757ebf5ef2a70c3-58020718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
    'pagging' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebf5ef379ff5_92769322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebf5ef379ff5_92769322')) {function content_57ebf5ef379ff5_92769322($_smarty_tpl) {?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" />
.







/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_video'];?>
" class="button-edit">Edit
<?php }?>