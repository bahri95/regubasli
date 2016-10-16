<?php /*%%SmartyHeaderCode:209605256457e9ee8f97a951-46869459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29647f234f98adf368e200f987eb1e6d47e10c9d' => 
    array (
      0 => 'application/views/web/base-layout/document-list.html',
      1 => 1474949698,
      2 => 'file',
    ),
    '77a1eda6cc84734346ce9ac641b1f771621654b2' => 
    array (
      0 => 'application/views/web/base-layout/footer.html',
      1 => 1473324244,
      2 => 'file',
    ),
    '3e4aa7eda89dba18595211cb0db30972a746c8fe' => 
    array (
      0 => 'application/views/web/base-layout/header.html',
      1 => 1474235202,
      2 => 'file',
    ),
    'f36110f272dd6932943df921173d302351fa858f' => 
    array (
      0 => 'application/views/web/base-layout/header_detail.html',
      1 => 1474288002,
      2 => 'file',
    ),
    'cd17044b971da62a1386b88b5c8b7ce060e9174e' => 
    array (
      0 => 'application/views/web/base-layout/breadcrumbs.html',
      1 => 1473324244,
      2 => 'file',
    ),
    'dbcabd6eb2d16fe58e951dde701ca30338de3d5e' => 
    array (
      0 => 'application/views/web/foto/detail.html',
      1 => 1473324246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209605256457e9ee8f97a951-46869459',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f3ab0c3a73_11204695',
  'variables' => 
  array (
    'act_lang' => 1,
    'BASEURL' => 1,
    'THEMESPATH' => 1,
    'LOADSTYLE' => 1,
    'LOADJS' => 0,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f3ab0c3a73_11204695')) {function content_57e9f3ab0c3a73_11204695($_smarty_tpl) {?><!DOCTYPE html><html>  <head>    <meta charset="utf-8">    <title>    <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>    The center of Information and coordination of Industry Perkelapasawitan Indonesia    <?php } else { ?>      Pusat Informasi dan Koordinasi Industri Perkelapasawitan Indonesia    <?php }?>       </title>    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/favicon.ico">    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" />    <?php echo $_smarty_tpl->tpl_vars['LOADSTYLE']->value;?>
  </head>  <body>    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;">    </div>     <!--removed by integration-->    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <div class="j-menu-container">    </div>    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header_detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <div class="l-inner-page-container">            <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/breadcrumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
      <div class="container">        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
      </div>          </div>    <footer>  <div class="b-footer-primary">    <div class="container">      <div class="row">        <div class="col-sm-8 col-xs-12 f-copyright b-copyright">Copyright © 2016 - Dewan Minyak Sawit Indonesia (DMSI)        </div>        <div class="col-sm-4 col-xs-12">          <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">            <i class="fa fa-chevron-up">            </i>          </div>          <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">            <ul>              <li class="is-active-bottom-nav">                <a href="http://dmsi.or.id/index.php/public/home">Home                </a>              </li>              <li>                <a href="http://dmsi.or.id/index.php/public/profil/detail">                                    Tentang kami                                  </a>              </li>              <li>                <a href="http://dmsi.or.id/index.php/public/kontak">                                    Kontak Kami                                  </a>              </li>            </ul>          </nav>        </div>      </div>    </div>  </div>  <div class="container">    <div class="b-footer-secondary row">      <div class="col-md-3 col-sm-12 col-xs-12 f-center b-footer-logo-containter">        <a href="">          <img data-retina class="b-footer-logo color-theme" src="http://dmsi.or.id/themes/default/img/logo_dmsi_besar.png" alt="Logo"/>        </a>        <div class="b-footer-logo-text f-footer-logo-text">          <p>DMSI            <br />Dewan Minyak Sawit Indonesia          </p>          <div class="b-btn-group-hor f-btn-group-hor">                        <?php if ($_smarty_tpl->tpl_vars['datasosmed']->value!='') {?>            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
" target="_blank" class="b-btn-group-hor__item f-btn-group-hor__item">              <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
">              </i>            </a>            <?php } ?>            <?php }?>                      </div>        </div>      </div>      <div class="col-md-6 col-sm-12 col-xs-12">        <h4 class="f-primary-b">                    Asosiasi Anggota DMSI                  </h4>        <div class="b-blog-short-post row">                    <?php if ($_smarty_tpl->tpl_vars['asosiasifooter']->value!='') {?>          <ul class="b-list-markers f-list-markers">            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asosiasifooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>            <li >               <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" >                <i class="fa fa-hand-o-right b-list-markers__ico f-list-markers__ico">                </i> <?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
              </a>            </li>            <?php } ?>          </ul>          <?php }?>                  </div>      </div>      <div class="col-md-3 col-sm-12 col-xs-12 ">        <h4 class="f-primary-b">                    Info Kontak                  </h4>        <div class="b-contacts-short-item-group">                    <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">              <i class="fa fa-map-marker">              </i>            </div>            <div class="b-remaining f-contacts-short-item__text">              <?php echo nl2br($_smarty_tpl->tpl_vars['kontakinfo']->value['alamat']);?>
            </div>          </div>          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">              <i class="fa fa-phone">              </i>            </div>            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">              <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['telp'];?>
            </div>          </div>          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">              <i class="fa fa-envelope">              </i>            </div>            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">              <a href=""><?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['email'];?>
              </a>            </div>          </div>                  </div>      </div>    </div>  </div></footer>    <!-- javascript loaded -->    <script type="text/javascript" src="http://dmsi.or.id/js/front/breakpoints.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/jquery.cslider.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/scrollspy.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/bootstrap.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/smooth-scroll/SmoothScroll.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/rs-plugin/videojs/video.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/jqueryui/jquery-ui.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/sliders.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/ui.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/retina.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/animate-numbers.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/parallax-effect.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/settings.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/color-themes.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/j.placeholder.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/fancybox/jquery.mousewheel.pack.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/fancybox/jquery.fancybox.custom.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/user.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/timeline.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/fontawesome-markers.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/cookie.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/loader.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/scrollIt/scrollIt.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/navigation-slide.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/audioplayer/js/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/audioplayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/audioplayer.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/admin/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/charts/highcharts.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/charts/modules/exporting.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/charts/modules/data.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/bootstrap-select.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/custom.js"></script>
    <!-- end of loaded javascript -->  </body></html><?php }} ?>
