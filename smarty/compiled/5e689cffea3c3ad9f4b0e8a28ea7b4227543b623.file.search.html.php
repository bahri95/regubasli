<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:52:48
         compiled from "application\views\web\pencarian\search.html" */ ?>
<?php /*%%SmartyHeaderCode:1766157ea4170bc29a4-44939320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e689cffea3c3ad9f4b0e8a28ea7b4227543b623' => 
    array (
      0 => 'application\\views\\web\\pencarian\\search.html',
      1 => 1473302648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1766157ea4170bc29a4-44939320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keyword' => 0,
    'data' => 0,
    'rs' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea4170c53249_60658286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea4170c53249_60658286')) {function content_57ea4170c53249_60658286($_smarty_tpl) {?><p>
"
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">

"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>



">

