<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:17:28
         compiled from "application/views/private/foto/list_foto.html" */ ?>
<?php /*%%SmartyHeaderCode:93010958257ecea38db3674-72809222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84467140d3302d15653711aa5ff5aac85a77b259' => 
    array (
      0 => 'application/views/private/foto/list_foto.html',
      1 => 1473934210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93010958257ecea38db3674-72809222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add_foto' => 0,
    'start' => 0,
    'end' => 0,
    'total' => 0,
    'pagging' => 1,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit_foto' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ecea38e6cbb6_97621093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecea38e6cbb6_97621093')) {function content_57ecea38e6cbb6_97621093($_smarty_tpl) {?>

">
">
.
.
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
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
">
" class="checkbox" />
.
" width="100" />



/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_album'];?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_foto'];?>
" title="Edit Foto" class="btn btn-success btn-flat">
<?php }?>