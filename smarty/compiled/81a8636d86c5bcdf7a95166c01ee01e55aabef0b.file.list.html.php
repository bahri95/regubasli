<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 05:44:25
         compiled from "application\views\private\relawan\list.html" */ ?>
<?php /*%%SmartyHeaderCode:3212858032c5c7127a9-34058284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a8636d86c5bcdf7a95166c01ee01e55aabef0b' => 
    array (
      0 => 'application\\views\\private\\relawan\\list.html',
      1 => 1476675842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3212858032c5c7127a9-34058284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58032c5c7e1855_49253977',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'data' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58032c5c7e1855_49253977')) {function content_58032c5c7e1855_49253977($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
.


/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_relawan'];?>
" title="Edit" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_relawan'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id_info'];?>
" onclick="return konfirmasi_delete();">
').html(),$('#modal-detail-asosiasi-footer').html(),'medium');" title="Lihat Detail" class="btn btn-info btn-flat"><i class='fa fa-eye'></i></a>
