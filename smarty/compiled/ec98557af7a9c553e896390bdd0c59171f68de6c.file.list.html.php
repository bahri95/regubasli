<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 07:43:33
         compiled from "application\views\private\kelurahan\list.html" */ ?>
<?php /*%%SmartyHeaderCode:3151158141a304bf595-34318237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec98557af7a9c553e896390bdd0c59171f68de6c' => 
    array (
      0 => 'application\\views\\private\\kelurahan\\list.html',
      1 => 1477719788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3151158141a304bf595-34318237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58141a305636c3_39547638',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_search' => 0,
    'kecamatan' => 0,
    'result_kecamatan' => 0,
    'kecamatan_selected' => 0,
    'kelurahan' => 0,
    'result' => 0,
    'kota_selected' => 0,
    'url_edit' => 0,
    'url_edit2' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58141a305636c3_39547638')) {function content_58141a305636c3_39547638($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
" >
/' + this.value">
 $_from = $_smarty_tpl->tpl_vars['kecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kecamatan']->key => $_smarty_tpl->tpl_vars['result_kecamatan']->value) {
$_smarty_tpl->tpl_vars['result_kecamatan']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_kecamatan']->value['id']==$_smarty_tpl->tpl_vars['kecamatan_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kecamatan']->value['nama'];?>

 $_from = $_smarty_tpl->tpl_vars['kelurahan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>



/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
"
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_kecamatan'];?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
"
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" onclick="return konfirmasi_delete();">