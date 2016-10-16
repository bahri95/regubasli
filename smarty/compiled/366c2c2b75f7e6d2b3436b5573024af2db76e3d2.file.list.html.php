<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:10:01
         compiled from "application/views/web/informasi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:212183935957e9ff290f0652-16825685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '366c2c2b75f7e6d2b3436b5573024af2db76e3d2' => 
    array (
      0 => 'application/views/web/informasi/list.html',
      1 => 1473859952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212183935957e9ff290f0652-16825685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informasi_list' => 0,
    'rs' => 0,
    'kategori' => 0,
    'act_lang' => 0,
    'result' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ff29184558_21139069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ff29184558_21139069')) {function content_57e9ff29184558_21139069($_smarty_tpl) {?><div class="l-inner-page-container">  <div class="container">    <?php if ($_smarty_tpl->tpl_vars['informasi_list']->value!='') {?>    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>    <div class="b-blog-one-column__row">      <div class="row">        <div class="col-sm-6 col-md-4">          <div class=" view view-sixth">            <img data-retina="" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">            <div class="b-item-hover-action f-center mask">              <div class="b-item-hover-action__inner">                <div class="b-item-hover-action__inner-btn_group">                  <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="b-btn f-btn b-btn-light f-btn-light info">                    <i class="fa fa-link">                    </i>                  </a>                </div>              </div>            </div>          </div>        </div>        <div class="col-sm-6 col-md-8">          <div class="b-blog__title b-form-row f-h4-special">            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="f-primary-l f-title-big f-blog__title"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
            </a>          </div>          <div class="b-form-row f-h4-special clearfix">            <div class="pull-left">              <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate b-blog-one-column__info_edit">                <i class="fa fa-pencil">                </i>              </a>            </div>            <div class="b-blog-one-column__info_container">              <div class="b-blog-one-column__info">                <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kategori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>                <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>Category :<?php } else { ?> Kategori :<?php }?>                 <a href="#" class="f-more">                  <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>                  <?php echo $_smarty_tpl->tpl_vars['result']->value['kategori_english'];?>
                  <?php } else { ?>                  <?php echo $_smarty_tpl->tpl_vars['result']->value['kategori'];?>
                  <?php }?>                </a>                <?php } ?>                <span class="b-blog-one-column__info_delimiter">                </span>                <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>Date<?php } else { ?>Tanggal<?php }?> :                  <a href="#" class="f-more"><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
                </a>              </div>            </div>          </div>          <div class="b-form-row b-blog-one-column__text"><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
          </div>          <div class="b-form-row b-null-bottom-indent">            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="b-btn f-btn b-btn-md b-btn-default f-primary-b"><?php echo $_smarty_tpl->tpl_vars['label']->value['selengkapnya'];?>
            </a>          </div>        </div>      </div>    </div>    <?php } ?>    <?php }?>    <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?>    <div class="b-pagination f-pagination">      <ul>        <?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
      </ul>    </div>    <?php }?>  </div></div><?php }} ?>
