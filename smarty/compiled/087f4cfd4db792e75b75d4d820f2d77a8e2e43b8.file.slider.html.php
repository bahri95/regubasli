<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:29:42
         compiled from "application\views\web\base-layout\slider.html" */ ?>
<?php /*%%SmartyHeaderCode:99757ea3c068326a3-16564096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '087f4cfd4db792e75b75d4d820f2d77a8e2e43b8' => 
    array (
      0 => 'application\\views\\web\\base-layout\\slider.html',
      1 => 1474507840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99757ea3c068326a3-16564096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'databanner' => 1,
    'rs' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3c06845f27_39544980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3c06845f27_39544980')) {function content_57ea3c06845f27_39544980($_smarty_tpl) {?><div class="b-slidercontainer b-slider">
  <div class="j-fullscreenslider j-arr-hide">
    <ul>
      
      <?php if ($_smarty_tpl->tpl_vars['databanner']->value!='') {?>
      <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databanner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
      <li data-transition="" data-slotamount="17" >
        <div class="tp-bannertimer">
        </div>
        <img data-retina src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['banner'];?>
">
      </li>
      <?php } ?>
      <?php }?>
      
    </ul>
  </div>

</div>
<?php }} ?>
