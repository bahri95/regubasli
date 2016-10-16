<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 02:21:18
         compiled from "application\views\web\beritadmsi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1803857ec5e7e7e1681-79055682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc06e9ff67b79286a4e9ff5e690d9fe02af47ab2' => 
    array (
      0 => 'application\\views\\web\\beritadmsi\\list.html',
      1 => 1473302646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1803857ec5e7e7e1681-79055682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'berita_list' => 0,
    'rs' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec5e7e8fe945_15275059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec5e7e8fe945_15275059')) {function content_57ec5e7e8fe945_15275059($_smarty_tpl) {?><div class="row j-masonry b-col-default-indent">  <div class="masonry-gridSizer col-xs-12 col-sm-6 col-md-3">  </div>  <!--start detail desc-->  <?php if ($_smarty_tpl->tpl_vars['berita_list']->value!='') {?>  <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>  <div class="j-masonry-item col-xs-12 col-sm-6 col-md-3">    <div class="b-blog-preview">      <div class="b-blog-preview__img view view-sixth">        <img data-retina="" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">        <div class="b-item-hover-action f-center mask">          <div class="b-item-hover-action__inner">            <div class="b-item-hover-action__inner-btn_group">              <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="b-btn f-btn b-btn-light f-btn-light info">                <i class="fa fa-link">                </i>              </a>            </div>          </div>        </div>      </div>      <div class="b-blog-preview__content b-diagonal-line-bg-light">        <div class="b-blog-preview__content-padding_box">          <p class="f-blog-preview__content-title f-primary-b">            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
            </a>          </p>          <p class="f-blog-preview__content-date f-primary-it"><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
          </p>          <p class="b-blog-preview__content-text f-blog-preview__content-text"><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
          </p>        </div>        <div class="b-footer-mini b-alternative-bg">          <a class="f-footer-mini__link f-more f-primary-b" href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">            <i class="fa fa-angle-double-right">            </i> <?php echo $_smarty_tpl->tpl_vars['label']->value['selengkapnya'];?>
          </a>        </div>      </div>    </div>  </div>  <?php } ?>  <?php }?>  <!--end detail --></div><?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><div class="b-pagination f-pagination">  <ul>    <?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
  </ul></div><?php }?></div><?php }} ?>
