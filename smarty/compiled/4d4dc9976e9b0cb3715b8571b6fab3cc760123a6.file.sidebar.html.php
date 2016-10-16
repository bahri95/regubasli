<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:14:07
         compiled from "application/views/web/base-layout/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:60556923157e9edd3d7bfd7-21872285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d4dc9976e9b0cb3715b8571b6fab3cc760123a6' => 
    array (
      0 => 'application/views/web/base-layout/sidebar.html',
      1 => 1474529440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60556923157e9edd3d7bfd7-21872285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9edd3ee35c3_06741784',
  'variables' => 
  array (
    'url_search_base' => 0,
    'key' => 0,
    'act_lang' => 0,
    'berita_sidebar' => 1,
    'rs' => 0,
    'baseurl' => 1,
    'kegiatanfooter' => 1,
    'profil_side' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9edd3ee35c3_06741784')) {function content_57e9edd3ee35c3_06741784($_smarty_tpl) {?><div class="col-md-3">  <!-- <div class="b-form-row b-input-search"><div class="b-right b-header-ico-group f-header-ico-group b-right"> <span class="b-header__search-box"> <i class="fa fa-search"></i><form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_search_base']->value;?>
" name="form-search"> <input  class="form-control" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" placeholder="Masukan kata pencarian"/></form></span></div> -->  <div class="row b-col-default-indent">        <div class="col-md-12">      <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special"><?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>        News<?php } else { ?>Berita<?php }?>      </h4>      <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">        <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row"> <?php if ($_smarty_tpl->tpl_vars['berita_sidebar']->value!='') {?>          <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>          <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">            <div class="b-blog-short-post__item_img">               <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">                <img data-retina src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
php_helpers/timthumb.php?src=<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
&amp;w=50&amp;h=50&amp;zc=0" alt=""/>              </a>             </div>            <div class="b-remaining">              <div class="b-blog-short-post__item_text f-blog-short-post__item_text">                 <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
                </a>               </div>              <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it"> <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
               </div>            </div>          </div>          <?php } ?>          <?php }?>         </div>      </div>    </div>    <div class="col-md-12">      <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">        Event      </h4>      <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">        <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row"> <?php if ($_smarty_tpl->tpl_vars['kegiatanfooter']->value!='') {?>          <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kegiatanfooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>          <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">            <!--  <div class="b-blog-short-post__item_img"> <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><img data-retina src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
php_helpers/timthumb.php?src=<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
&amp;w=50&amp;h=50&amp;zc=0" alt=""/></a> </div>-->            <div class="b-remaining">              <div class="b-blog-short-post__item_text f-blog-short-post__item_text">                 <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_english'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_agenda'];?>
<?php }?>                </a>               </div>              <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it"> <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal_mulai'];?>
 - <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal_selesai'];?>
               </div>            </div>          </div>          <?php } ?>          <?php }?>         </div>      </div>    </div>        <div class="col-md-12">      <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">        <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>About Us<?php } else { ?>Tentang Kami<?php }?>      </h4>      <div class="b-shortcode-example">        <ul class="b-list-markers f-list-markers">          <?php if ($_smarty_tpl->tpl_vars['profil_side']->value!='') {?>          <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profil_side']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>          <li>            <i class="fa fa-angle-double-right b-list-markers__ico f-list-markers__ico">            </i>             <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
            </a>          </li>          <?php } ?>          <?php }?>          </ul>      </div>    </div>    <div class="col-md-12">      <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">        <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>Visitor<?php } else { ?>Pengunjung<?php }?>      </h4>      <!-- Histats.com  (div with counter) -->      <div id="histats_counter">      </div>      <!-- Histats.com  START  (aync)-->      <script type="text/javascript">var _Hasync= _Hasync|| [];        _Hasync.push(['Histats.start', '1,3536992,4,30,130,80,00011111']);        _Hasync.push(['Histats.fasi', '1']);        _Hasync.push(['Histats.track_hits', '']);        (function() {          var hs = document.createElement('script');          hs.type = 'text/javascript';          hs.async = true;          hs.src = ('//s10.histats.com/js15_as.js');          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);        }        )();      </script>      <noscript>        <a href="/" target="_blank">          <img  src="//sstatic1.histats.com/0.gif?3536992&101" alt="web stats" border="0">        </a>      </noscript>      <!-- Histats.com  END  -->    </div>  </div></div><?php }} ?>
