<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:12:05
         compiled from "application\views\private\sosmed\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1474357ec9495dbfd32-44496264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57d384ad3d9f48cde43f60cced606ab8bc71cfc2' => 
    array (
      0 => 'application\\views\\private\\sosmed\\list.html',
      1 => 1473302640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1474357ec9495dbfd32-44496264',
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
  'unifunc' => 'content_57ec9495e63e55_84188203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec9495e63e55_84188203')) {function content_57ec9495e63e55_84188203($_smarty_tpl) {?>
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



/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_sosmed'];?>
" title="Edit Nama Album" class="btn btn-success btn-flat">
<?php }?>