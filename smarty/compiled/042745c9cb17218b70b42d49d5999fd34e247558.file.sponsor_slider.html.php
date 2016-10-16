<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:09:29
         compiled from "application/views/web/home/sponsor_slider.html" */ ?>
<?php /*%%SmartyHeaderCode:17685413957e9ea7e8ad195-54596708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '042745c9cb17218b70b42d49d5999fd34e247558' => 
    array (
      0 => 'application/views/web/home/sponsor_slider.html',
      1 => 1475135106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17685413957e9ea7e8ad195-54596708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ea7e968e85_19754091',
  'variables' => 
  array (
    'sponsor_list' => 0,
    'rs' => 0,
    'act_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ea7e968e85_19754091')) {function content_57e9ea7e968e85_19754091($_smarty_tpl) {?><section>  <div class="f-info-container">    <div class="container">      <div class="b-info-container__title f-info-container__title">        <!-- <i class="fa fa-twitter"></i><br>-->        <span class="f-b f-primary-b" style="color:#424242;">SPONSOR DMSI        </span>      </div>      <div class="b-carousel-reset b-carousel-arr-out b-carousel-small-arr f-carousel-small-arr b-remaining">        <div class="f-center b-logo-group j-logo-slider">          <?php if ($_smarty_tpl->tpl_vars['sponsor_list']->value!='') {?>        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sponsor_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>        <div class="j-masonry-item col-sm-6 col-md-2 j-filter-portrait">          <div class="b-gallery-main-item view view-eighth">            <img data-retina='' src='<?php echo $_smarty_tpl->tpl_vars['rs']->value['image_sponsor'];?>
'>            <div class="b-item-hover-action f-center mask">              <div class="b-item-hover-action__inner">                <div class="b-item-hover-action__inner-btn_group b-default-top-indent">                  <a data-animate="fadeInDown" href='<?php echo $_smarty_tpl->tpl_vars['rs']->value['image_iklan'];?>
' class='b-btn f-btn b-btn-light f-btn-light fancybox info'                  <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>                  title='<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_english'];?>
'                  <?php } else { ?>                  title='<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
'                  <?php }?>                  >                    <i class='fa fa-arrows-alt'>                    </i>                  </a>                                </div>              </div>            </div>          </div>                  </div>        <?php } ?>        <?php }?>        </div>      </div>    </div>    </section><?php }} ?>
