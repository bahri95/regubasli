<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 03:46:50
         compiled from "application\views\web\home\sponsor_slider.html" */ ?>
<?php /*%%SmartyHeaderCode:3107357ea3c06e8f6a9-89284115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '807c3e7dd808a73bd2c6dbf6f4814e4ab394a4da' => 
    array (
      0 => 'application\\views\\web\\home\\sponsor_slider.html',
      1 => 1475113506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3107357ea3c06e8f6a9-89284115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3c06eaeaa4_56880500',
  'variables' => 
  array (
    'sponsor_list' => 0,
    'rs' => 0,
    'act_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3c06eaeaa4_56880500')) {function content_57ea3c06eaeaa4_56880500($_smarty_tpl) {?><section>  <div class="f-info-container">    <div class="container">      <div class="b-info-container__title f-info-container__title">        <!-- <i class="fa fa-twitter"></i><br>-->        <span class="f-b f-primary-b" style="color:#424242;">SPONSOR DMSI        </span>      </div>      <div class="b-carousel-reset b-carousel-arr-out b-carousel-small-arr f-carousel-small-arr b-remaining">        <div class="f-center b-logo-group j-logo-slider">          <?php if ($_smarty_tpl->tpl_vars['sponsor_list']->value!='') {?>        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sponsor_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>        <div class="j-masonry-item col-sm-6 col-md-2 j-filter-portrait">          <div class="b-gallery-main-item view view-eighth">            <img data-retina='' src='<?php echo $_smarty_tpl->tpl_vars['rs']->value['image_sponsor'];?>
'>            <div class="b-item-hover-action f-center mask">              <div class="b-item-hover-action__inner">                <div class="b-item-hover-action__inner-btn_group b-default-top-indent">                  <a data-animate="fadeInDown" href='<?php echo $_smarty_tpl->tpl_vars['rs']->value['image_iklan'];?>
' class='b-btn f-btn b-btn-light f-btn-light fancybox info'                  <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>                  title='<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_english'];?>
'                  <?php } else { ?>                  title='<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
'                  <?php }?>                  >                    <i class='fa fa-arrows-alt'>                    </i>                  </a>                                </div>              </div>            </div>          </div>                  </div>        <?php } ?>        <?php }?>        </div>      </div>    </div>    </section><?php }} ?>
