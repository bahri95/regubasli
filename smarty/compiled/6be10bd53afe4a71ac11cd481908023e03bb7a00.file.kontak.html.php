<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:53:26
         compiled from "application\views\web\kontak\kontak.html" */ ?>
<?php /*%%SmartyHeaderCode:387557ea41969a0cc4-13062283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6be10bd53afe4a71ac11cd481908023e03bb7a00' => 
    array (
      0 => 'application\\views\\web\\kontak\\kontak.html',
      1 => 1474013350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '387557ea41969a0cc4-13062283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'label' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'datasosmed' => 0,
    'rs' => 0,
    'url_captcha' => 0,
    'kontakinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea41969f2d53_33372426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea41969f2d53_33372426')) {function content_57ea41969f2d53_33372426($_smarty_tpl) {?><section class="b-google-map map-theme b-bord-box" data-location-set="contact-us">
themes/default/img/google-map-marker-default.png" data-label="" class="marker-template hidden" />


 


 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
">

"> <?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
</a>
" />


" target="_blank"><?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['website'];?>

