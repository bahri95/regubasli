<?php /* Smarty version Smarty-3.1.17, created on 2016-09-26 23:59:11
         compiled from "application/views/web/asosiasi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:170812731657e9ee8fdfef10-44842046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba300b0d949287054509de302d595b05e86e82c9' => 
    array (
      0 => 'application/views/web/asosiasi/list.html',
      1 => 1473324242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170812731657e9ee8fdfef10-44842046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_modul' => 0,
    'asosiasilist' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ee90075ab0_38073639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ee90075ab0_38073639')) {function content_57e9ee90075ab0_38073639($_smarty_tpl) {?><div class="row">  <div class="col-md-12">    <div class="f-primary-b b-title-b-hr f-title-b-hr"><?php echo $_smarty_tpl->tpl_vars['page_modul']->value;?>
    </div>    <!--<div class="row b-shortcode-example"><?php if ($_smarty_tpl->tpl_vars['asosiasilist']->value!='') {?><?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asosiasilist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?><div class="col-md-4"><div class="b-tagline-box  b-tagline-box--no-shadow b-tagline-box--color"><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo_asosiasi'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
" /></a></div></div><?php } ?><?php }?></div>-->    <div class="j-filter-content">      <div class="row b-portfolio-gallery j-masonry">        <div class="masonry-gridSizer col-lg-3 col-md-4 col-sm-6 col-xs-12">        </div>        <!--start detail desc-->        <?php if ($_smarty_tpl->tpl_vars['asosiasilist']->value!='') {?>        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asosiasilist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>        <div class="j-masonry-item col-lg-3 col-md-4 col-sm-6 col-xs-12 j-filter-graphic j-filter-web">          <div>            <div class="b-app-with-img__item">              <div class="b-app-with-img__item_img view view-sixth b-tagline-box  b-tagline-box--no-shadow" style="padding:0px !Important;">                 <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">                  <img class="j-data-element" data-animate="fadeIn" data-retina src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo_asosiasi'];?>
" alt=""/>                </a>                <div class="b-item-hover-action f-center mask">                  <div class="b-item-hover-action__inner">                    <div class="b-item-hover-action__inner-btn_group">                       <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="b-btn f-btn b-btn-light f-btn-light info">                        <i class="fa fa-link">                        </i>                      </a>                     </div>                  </div>                </div>              </div>              <div class="b-app-with-img__item_text f-center" style="padding:5px !Important;">                <div class="b-app-with-img__item_name f-app-with-img__item_name f-primary-b">                  <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
                  </a>                </div>              </div>            </div>          </div>        </div>        <?php } ?>        <?php }?>       </div>    </div>  </div></div><?php }} ?>
