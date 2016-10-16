<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:19:32
         compiled from "application/views/web/informasi/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:137634855557e9f3546f7319-45291998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44749ed37087b9f9f3899fa77b6e4d86a4b1adca' => 
    array (
      0 => 'application/views/web/informasi/detail.html',
      1 => 1473324248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137634855557e9f3546f7319-45291998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'act_lang' => 0,
    'kategori' => 0,
    'result' => 0,
    'label' => 0,
    'informasi_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f3547aeae5_84111817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f3547aeae5_84111817')) {function content_57e9f3547aeae5_84111817($_smarty_tpl) {?><div class="col-md-9">
  <!--start detail desc-->
  <div class="b-article-box">
    <div class="f-article_title f-primary-l b-title-b-hr">
      <?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>

    </div>
    <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b">
      <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>
      Category :
      <?php } else { ?>
      Kategori :
      <?php }?>
      <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kategori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
      <a href="#" class="f-more"><?php if ($_smarty_tpl->tpl_vars['result']->value['id_kategori']==$_smarty_tpl->tpl_vars['data']->value['id_kategori']) {?>
        <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>
        <?php echo $_smarty_tpl->tpl_vars['result']->value['kategori_english'];?>

        <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['result']->value['kategori'];?>

        <?php }?>
        <?php }?>
      </a>
      <?php } ?>
      Posted : <?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>

    </div>
    <div class="b-article__description">
      <?php if ($_smarty_tpl->tpl_vars['data']->value['image']!='') {?>
      <div class="col-md-6" style="float:left;margin:0 10px 10px 0;">
        <img data-retina src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" style="max-width:100%;margin:0 10px 10px 0;">
        <?php if ($_smarty_tpl->tpl_vars['data']->value['keterangan_gambar']!='') {?>
        <p>
        <h6>
          <i><?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_gambar'];?>

          </i>
        </h6>
        </p><?php }?>
    </div>
    <?php }?>
    <p class="justify"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </p>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['data']->value['file_berita']!='') {?>
  <div class="b-article__social-info">
    <ul>
      <li>
        <div class="b-article__tag">
          <span class="b-article__social-info-name f-article__social-info-name">
            <i class="fa fa-download">
            </i> 
          </span>
          <a class="f-tag b-tag" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['file_lampiran'];?>
">Download Lampiran
          </a>
        </div>
      </li>
    </ul>
  </div>
  <?php }?>
</div>
<div class="b-hr">
</div>

<script type="text/javascript">var switchTo5x=true;
</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js">
</script>
<script type="text/javascript">stLight.options({
    publisher: "a4abca36-32a8-4c45-9716-281f17242f3b", doNotHash: false, doNotCopy: false, hashAddressBar: false}
                                              );
</script>

<h5>
  <b><?php echo $_smarty_tpl->tpl_vars['label']->value['bagikan'];?>

  </b>
</h5>
<br/>
<span class='st_sharethis_large' displayText='ShareThis'>
</span>
<span class='st_facebook_large' displayText='Facebook' st_title="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
">
</span>
<span class='st_twitter_large' displayText='Tweet'>
</span>
<span class='st_linkedin_large' displayText='LinkedIn'>
</span>
<span class='st_pinterest_large' displayText='Pinterest'>
</span>
<span class='st_email_large' displayText='Email'>
</span>
<!-- Your share button code -->
<!--end detail -->
<div class="b-hr">
</div>
<h4>
  <b>RELATED POST
  </b>
</h4>
<div class="b-hr">
</div>
<div class="container">
  <div class="row j-masonry b-col-default-indent">
    <div class="masonry-gridSizer col-xs-12 col-sm-6 col-md-3">
    </div>
    <?php if ($_smarty_tpl->tpl_vars['informasi_list']->value!='') {?>
    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
    <div class="j-masonry-item col-xs-12 col-sm-6 col-md-3">
      <div class="b-blog-preview">
        <div class="b-blog-preview__img view view-sixth">
          <img data-retina="" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
"  alt="">
          <div class="b-item-hover-action f-center mask">
            <div class="b-item-hover-action__inner">
              <div class="b-item-hover-action__inner-btn_group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="b-btn f-btn b-btn-light f-btn-light info">
                  <i class="fa fa-link">
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="b-blog-preview__content b-diagonal-line-bg-light">
          <div class="b-blog-preview__content-padding_box">
            <p class="f-blog-preview__content-title f-primary-b">
            <h6><?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori'];?>

            </h6>
            </p>
          <br/>
          <p class="f-blog-preview__content-title f-primary-b">
            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

            </a>
          </p>
          <p class="f-blog-preview__content-date f-primary-it"><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>

          </p>
        </div>
        <div class="b-footer-mini b-alternative-bg">
          <a class="f-footer-mini__link f-more f-primary-b" href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">
            <i class="fa fa-angle-double-right">
            </i><?php echo $_smarty_tpl->tpl_vars['label']->value['selengkapnya'];?>

          </a>
        </div>
      </div>
    </div>
    <!--b blog preview-->
  </div>
  <!--j-masonry-item-->
  <?php } ?>
  <?php }?>
</div>
<!--row j-masonry-->
</div>
<!--container-->
</div>
<!--end col 9-->
<?php }} ?>
