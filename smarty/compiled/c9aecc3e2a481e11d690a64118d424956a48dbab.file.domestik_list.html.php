<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 05:01:36
         compiled from "application\views\private\harga\domestik_list.html" */ ?>
<?php /*%%SmartyHeaderCode:907857ec84108dd4f0-14206916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9aecc3e2a481e11d690a64118d424956a48dbab' => 
    array (
      0 => 'application\\views\\private\\harga\\domestik_list.html',
      1 => 1474833500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '907857ec84108dd4f0-14206916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_add' => 0,
    'data_domestik_input' => 0,
    'result' => 0,
    'no' => 0,
    'url_edit' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec841092f595_64274755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec841092f595_64274755')) {function content_57ec841092f595_64274755($_smarty_tpl) {?>                     <div class="box">
/1" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a></div>
 $_from = $_smarty_tpl->tpl_vars['data_domestik_input']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" /></td>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" title="Edit" class="btn btn-success btn-flat"><i class='fa fa-pencil'></i></a>
<?php }?></ul>