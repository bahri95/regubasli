<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:09:36
         compiled from "application\views\private\agenda\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1652457ec9400e717b9-06510798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eadc37ccadec2132d8088838b33d59de7539ca6' => 
    array (
      0 => 'application\\views\\private\\agenda\\list.html',
      1 => 1474263264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1652457ec9400e717b9-06510798',
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
    'rs' => 1,
    'no' => 1,
    'url_edit' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec9400f252e3_39498389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec9400f252e3_39498389')) {function content_57ec9400f252e3_39498389($_smarty_tpl) {?>
"><i class="fa fa-home"></i> Home</a></li>
.
.
" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a>
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</b> dari <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> data</span>
<?php }?>
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" class="checkbox" /></td>
</td>
<br/><i><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_english'];?>
</i></td>
</td>
 s/d <br />
</td>
" width="100" />
/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_agenda'];?>
" title="Edit" class="btn btn-success btn-flat"><i class='fa fa-pencil'></i></a>
<?php }?></ul>