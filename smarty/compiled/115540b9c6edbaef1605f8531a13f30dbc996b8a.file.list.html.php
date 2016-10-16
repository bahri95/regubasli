<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:35:24
         compiled from "application\views\web\sponsor\list.html" */ ?>
<?php /*%%SmartyHeaderCode:147057ea3d5c49e5d5-88171343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '115540b9c6edbaef1605f8531a13f30dbc996b8a' => 
    array (
      0 => 'application\\views\\web\\sponsor\\list.html',
      1 => 1474013412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147057ea3d5c49e5d5-88171343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_list' => 0,
    'rs' => 0,
    'act_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3d5c500070_12892793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3d5c500070_12892793')) {function content_57ea3d5c500070_12892793($_smarty_tpl) {?> <section class="container b-welcome-box">            <div class="row">                <div class="col-md-offset-2 col-md-8">                    <h1 class="is-global-title f-center">Sponsorship</h1>                </div>            </div>        </section><section class="b-infoblock--without-border">  <div class="container ">    <div class="j-filter-content">      <div class="row row b-col-default-indent b-gallery--secondary j-masonry">        <div class="masonry-gridSizer col-sm-6 col-md-2">        </div>        <?php if ($_smarty_tpl->tpl_vars['sponsor_list']->value!='') {?>        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sponsor_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>        <div class="j-masonry-item col-sm-6 col-md-2 j-filter-portrait">          <div class="b-gallery-main-item view view-eighth">            <img data-retina='' src='<?php echo $_smarty_tpl->tpl_vars['rs']->value['image_sponsor'];?>
'>            <div class="b-item-hover-action f-center mask">              <div class="b-item-hover-action__inner">                <div class="b-item-hover-action__inner-btn_group b-default-top-indent">                  <a data-animate="fadeInDown" href='<?php echo $_smarty_tpl->tpl_vars['rs']->value['image_iklan'];?>
' class='b-btn f-btn b-btn-light f-btn-light fancybox info'                  <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>                  title='<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_english'];?>
'                  <?php } else { ?>                  title='<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
'                  <?php }?>                  >                    <i class='fa fa-arrows-alt'>                    </i>                  </a>                                </div>              </div>            </div>          </div>                  </div>        <?php } ?>        <?php }?>      </div>    </div>  </div></section><?php }} ?>
