<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:28:13
         compiled from "application/views/private/base-layout/document.html" */ ?>
<?php /*%%SmartyHeaderCode:147719972557ea036dbab2f6-43258069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '180ef98a5a6426338eb8c67bbeb0b8bc886e97f3' => 
    array (
      0 => 'application/views/private/base-layout/document.html',
      1 => 1473324224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147719972557ea036dbab2f6-43258069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_description' => 0,
    'site_keyword' => 0,
    'site_title' => 0,
    'THEMESPATH' => 0,
    'LOADSTYLE' => 1,
    'data_aspirasi' => 1,
    'jumlah_aspirasi' => 1,
    'result' => 1,
    'url_aspirasi_list' => 0,
    'BASEURL' => 1,
    'rs' => 1,
    'data_anggota_baru' => 1,
    'jumlah_anggota_baru' => 1,
    'url_anggota_list' => 0,
    'user_account' => 1,
    'url_logout_admin_process' => 1,
    'LOADJS' => 1,
    'LOADJSCRUD' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea036dd36979_23459622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea036dd36979_23459622')) {function content_57ea036dd36979_23459622($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
' />
' />

" />

 $_from = $_smarty_tpl->tpl_vars['jumlah_aspirasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>

 $_from = $_smarty_tpl->tpl_vars['jumlah_aspirasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>

 $_from = $_smarty_tpl->tpl_vars['data_aspirasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
">
doc/aspirasi/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_aspirasi'];?>
/<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
" class="img-circle" alt="User Image"/>



">Lihat Semua Pesan
 $_from = $_smarty_tpl->tpl_vars['jumlah_anggota_baru']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>

 $_from = $_smarty_tpl->tpl_vars['jumlah_anggota_baru']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>

 $_from = $_smarty_tpl->tpl_vars['data_anggota_baru']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
">
doc/registrasi/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_registrasi'];?>
/<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" class="img-circle" alt="User Image"/>


">

" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user_account']->value['admin_name'];?>
" />


</small>-->
">Akun
">Profil
">Photo
" class="btn btn-default btn-flat">Profil Museum
" class="btn btn-default btn-flat">Log Out



