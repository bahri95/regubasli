<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:23:11
         compiled from "application/views/private/banner/list.html" */ ?>
<?php /*%%SmartyHeaderCode:166944389257eceb8f3af6b4-33238465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd970255f516bccb3f16d6ccf82980222a0dcf80f' => 
    array (
      0 => 'application/views/private/banner/list.html',
      1 => 1475143916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166944389257eceb8f3af6b4-33238465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'start' => 0,
    'end' => 0,
    'total' => 0,
    'pagging' => 1,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57eceb8f4700b7_61251445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57eceb8f4700b7_61251445')) {function content_57eceb8f4700b7_61251445($_smarty_tpl) {?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</b> dari <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> data</span>
<?php }?>
" name="form-album" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" />
.
" width="100" />
" width="100" />






/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_banner'];?>
" title="Edit Nama Album" class="btn btn-success btn-flat">
<?php }?>