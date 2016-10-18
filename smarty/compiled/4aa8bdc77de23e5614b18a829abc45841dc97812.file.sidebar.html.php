<?php /* Smarty version Smarty-3.1.17, created on 2016-10-18 06:38:20
         compiled from "application\views\web\base-layout\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:132745805a6c1277104-40725526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa8bdc77de23e5614b18a829abc45841dc97812' => 
    array (
      0 => 'application\\views\\web\\base-layout\\sidebar.html',
      1 => 1476765499,
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
    'informasi_list' => 0,
    'rs' => 0,
    'berita_list' => 0,
    'berita_list_anggota' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5805a6c1303b26_49344125')) {function content_5805a6c1303b26_49344125($_smarty_tpl) {?><!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin col_last clearfix">
                        <div class="sidebar-widgets-wrap">

                           
                            <div class="widget clearfix">

                                    <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#tabs-1">Asli</a></li>
                                            <li><a href="#tabs-2">Rahmad</a></li>
                                            <li><a href="#tabs-3">Lain2</a></li>
                                        </ul>

                                        <div class="tab-container">

                                            <div class="tab-content clearfix" id="tabs-1">
                                                <div id="popular-post-list-sidebar">

                                                     <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                            <div class="tab-content clearfix" id="tabs-3">
                                                   <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_anggota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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


                            <div class="widget clearfix">

                                <h4>Portfolio Carousel</h4>
                                <div id="oc-portfolio-sidebar" class="owl-carousel portfolio-5">

                                    <div class="oc-item">
                                        <div class="iportfolio">
                                            <div class="portfolio-image">
                                                <a href="#">
                                                    <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                                </a>
                                                <div class="portfolio-overlay">
                                                    <a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc center nobottompadding">
                                                <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                                <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="oc-item">
                                        <div class="iportfolio">
                                            <div class="portfolio-image">
                                                <a href="portfolio-single.html">
                                                    <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                                                </a>
                                                <div class="portfolio-overlay">
                                                    <a href="images/blog/full/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc center nobottompadding">
                                                <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                                <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <script type="text/javascript">

                                    jQuery(document).ready(function($) {

                                        var ocClients = $("#oc-portfolio-sidebar");

                                        ocClients.owlCarousel({
                                            items: 1,
                                            margin: 10,
                                            loop: true,
                                            nav: false,
                                            autoplay: true,
                                            dots: true,
                                            autoplayHoverPause: true
                                        });

                                    });

                                </script>

                            </div>

                            <div class="widget clearfix">

                                <h4>Tag Cloud</h4>
                                <div class="tagcloud">
                                    <a href="#">general</a>
                                    <a href="#">videos</a>
                                    <a href="#">music</a>
                                    <a href="#">media</a>
                                    <a href="#">photography</a>
                                    <a href="#">parallax</a>
                                    <a href="#">ecommerce</a>
                                    <a href="#">terms</a>
                                    <a href="#">coupons</a>
                                    <a href="#">modern</a>
                                </div>

                            </div>

                        </div>

                    </div><!-- .sidebar end --><?php }} ?>
