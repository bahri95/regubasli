<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:09:29
         compiled from "application/views/web/base-layout/slider.html" */ ?>
<?php /*%%SmartyHeaderCode:78360234157e9ea7e0ac322-79643827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '375e12841503a5d2816cf46ff5db3417e152386d' => 
    array (
      0 => 'application/views/web/base-layout/slider.html',
      1 => 1474529440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78360234157e9ea7e0ac322-79643827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ea7e0c6382_72443606',
  'variables' => 
  array (
    'databanner' => 1,
    'rs' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ea7e0c6382_72443606')) {function content_57e9ea7e0c6382_72443606($_smarty_tpl) {?><div class="b-slidercontainer b-slider">
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
