<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:54:31
         compiled from "application\views\private\dashboard\tabel_tbs.html" */ ?>
<?php /*%%SmartyHeaderCode:90657ea41d7de1664-74981774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90566b10cf9ae974628b995b34dc6ebdf49d85fb' => 
    array (
      0 => 'application\\views\\private\\dashboard\\tabel_tbs.html',
      1 => 1474855810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90657ea41d7de1664-74981774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tahun_data' => 1,
    'databulan' => 1,
    'rs' => 1,
    'datatbs' => 1,
    'data' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea41d7e79c08_55310450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea41d7e79c08_55310450')) {function content_57ea41d7e79c08_55310450($_smarty_tpl) {?> <div class="box-body table-responsive"><table class="table table-bordered table-striped">              <tbody>			  <tr>                <td colspan="13" style="text-align:center;">Tahun <?php echo $_smarty_tpl->tpl_vars['tahun_data']->value;?>
                <br /><span style="float:right;">Harga dalam Rupiah</span>                </td>              </tr>                <tr>				  <td>Nama Provinsi</td>					 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databulan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>					<td><?php echo $_smarty_tpl->tpl_vars['rs']->value['lengkap'];?>
</td>					<?php } ?>                </tr>            </tr>			 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datatbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>              <tr>                <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_provinsi'];?>
</td>                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rs']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>                <td align="right"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</td>                <?php } ?>              </tr>              <?php } ?></tbody></table></div><?php }} ?>
