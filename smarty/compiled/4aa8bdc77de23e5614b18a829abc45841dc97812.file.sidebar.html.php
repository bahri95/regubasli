<?php /* Smarty version Smarty-3.1.17, created on 2016-10-31 12:41:58
         compiled from "application\views\web\base-layout\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:132745805a6c1277104-40725526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa8bdc77de23e5614b18a829abc45841dc97812' => 
    array (
      0 => 'application\\views\\web\\base-layout\\sidebar.html',
      1 => 1477533179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132745805a6c1277104-40725526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5805a6c1303b26_49344125',
  'variables' => 
  array (
    'video_list' => 0,
    'rs' => 0,
    'informasi_list_side' => 0,
    'berita_list_side' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805a6c1303b26_49344125')) {function content_5805a6c1303b26_49344125($_smarty_tpl) {?><!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin col_last clearfix">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget clearfix">
                          <div id="video_side" class="owl-carousel portfolio-carousel">
                                <?php if ($_smarty_tpl->tpl_vars['video_list']->value!='') {?>
                                    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <article class="portfolio-item pf-graphics pf-uielements">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['video_image'];?>
" alt="Mac Sunglasses">
                                            </a>
                                            <div class="portfolio-overlay">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_play'];?>
" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                               
                                            </div>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h6><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_video'];?>
</h6>
                                        </div>
                                    </article>
                                    <?php } ?>
                                    <?php }?>

                                </div><!-- .foto-carousel end -->
                        </div>

                              <!-- twiiter -->
                              <div class="widget clearfix">
                                    <a class="twitter-timeline" data-lang="id" data-width="450" data-height="370" data-theme="light" href="https://twitter.com/RelawanGreenJkt">Tweets by RelawanGreenJkt</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                                </div>
                                <!-- facebook -->
                                <div class="widget clearfix">
                                <div class="fb-page" data-href="https://www.facebook.com/RelawanRahmatSumut/" data-tabs="timeline" data-width="450" data-height="370" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/RelawanRahmatSumut/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RelawanRahmatSumut/">Relawan Green Jakarta</a></blockquote></div>
                                </div>

                            <div class="widget clearfix">

                                    <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#tabs-1">GubernurDKI</a></li>
                                            <li><a href="#tabs-2">Relawan</a></li>
                                            
                                        </ul>

                                        <div class="tab-container">

                                            <div class="tab-content clearfix" id="tabs-1">
                                                <div id="popular-post-list-sidebar">

                                                     <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasi_list_side']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="nobg"><img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt=""></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h4>
                                                            </div>
                                                            <ul class="entry-meta">
                                                                <li><i class="icon-calendar3"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                   
                                                </div>
                                            </div>
                                            <div class="tab-content clearfix" id="tabs-2">
                                                <div id="recent-post-list-sidebar">

                                                   <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_side']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" class="nobg"><img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt=""></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h4>
                                                            </div>
                                                            <ul class="entry-meta">
                                                                <li><i class="icon-calendar3"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                           
                                        </div>

                                    </div>

                                </div>
                        </div><!-- end berita -->


                           <div class="line"></div>
                       <div class="widget clearfix">
                       <div class="col-md-8">
                        <!-- Histats.com  START (html only)-->
                            <a href="/" alt="page hit counter" target="_blank" >
                            <embed src="http://s10.histats.com/30.swf"  flashvars="jver=1&acsid=3626944&domi=4"  quality="high"  width="130" height="80" name="30.swf"  align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" /></a>
                            <img  src="//sstatic1.histats.com/0.gif?3626944&101" alt="free page hit counter" border="0">
                        <!-- Histats.com  END  -->
                        </div>
                       </div>
                            

                        </div>

                    </div><!-- .sidebar end -->
<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=146631999110903";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php }} ?>
