<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:29:42
         compiled from "application\views\web\home\anggota_slider.html" */ ?>
<?php /*%%SmartyHeaderCode:2903557ea3c06bf3684-70809627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f804fa534b534dde0c8d3679f3ddb81c85575be4' => 
    array (
      0 => 'application\\views\\web\\home\\anggota_slider.html',
      1 => 1474507844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2903557ea3c06bf3684-70809627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'judul' => 0,
    'listasosiasi' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3c06c0ec09_99146749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3c06c0ec09_99146749')) {function content_57ea3c06c0ec09_99146749($_smarty_tpl) {?><section class="b-info-container b-tagline-box b-infoblock b-diagonal-line-bg-light b">  <div class="f-info-container">    <div class="container">      <div class="b-info-container__title f-info-container__title">        <!-- <i class="fa fa-twitter"></i><br>-->        <span class="f-b f-primary-b" style="color:#424242;"><?php echo $_smarty_tpl->tpl_vars['judul']->value['anggota'];?>
        </span>      </div>      <div class="b-carousel-reset b-carousel-arr-out b-carousel-small-arr f-carousel-small-arr b-remaining">        <div class="f-center b-logo-group j-logo-slider">          <?php if ($_smarty_tpl->tpl_vars['listasosiasi']->value!='') {?>          <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listasosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>          <div class="b-logo-item">            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">              <img class="is-normal" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo_asosiasi'];?>
" height="100"  alt=""/>              <img class="is-hover" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo_asosiasi'];?>
" height="100"  alt=""/>            </a>          </div>          <?php } ?>          <?php }?>        </div>      </div>    </div>    </section><?php }} ?>
