<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 05:31:29
         compiled from "application\views\private\kecamatan\kecamatan-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:177385814126d269072-16280524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44238f22180bb597a19ab2df27474d94f82334ef' => 
    array (
      0 => 'application\\views\\private\\kecamatan\\kecamatan-edit.html',
      1 => 1477711729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177385814126d269072-16280524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5814126d2f1c16_36356941',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'kota' => 0,
    'result_kota' => 0,
    'kota_selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5814126d2f1c16_36356941')) {function content_5814126d2f1c16_36356941($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post">
" />
 $_from = $_smarty_tpl->tpl_vars['kota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kota']->key => $_smarty_tpl->tpl_vars['result_kota']->value) {
$_smarty_tpl->tpl_vars['result_kota']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_kota']->value['id']==$_smarty_tpl->tpl_vars['kota_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kota']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result_kota']->value['nama'];?>

"  id="id_kecamatanv" class="form-control"  maxlength="10" readonly="readonly" />
" size="45" maxlength="255" />
"  class="btn btn-primary">