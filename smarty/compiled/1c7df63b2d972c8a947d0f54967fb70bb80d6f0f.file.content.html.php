<?php /* Smarty version Smarty-3.1.17, created on 2016-10-22 11:43:52
         compiled from "application\views\web\home\content.html" */ ?>
<?php /*%%SmartyHeaderCode:202465802fa19103f11-69857447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7df63b2d972c8a947d0f54967fb70bb80d6f0f' => 
    array (
      0 => 'application\\views\\web\\home\\content.html',
      1 => 1476975893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202465802fa19103f11-69857447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fa19190934_71676942',
  'variables' => 
  array (
    'datagabungan' => 0,
    'rs' => 0,
    'informasi_list' => 0,
    'berita_list' => 0,
    'list_foto' => 0,
    'berita_list_anggota' => 0,
    'datasosmed' => 0,
    'video_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fa19190934_71676942')) {function content_5802fa19190934_71676942($_smarty_tpl) {?>
                <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                    <div>
                        <div class="container clearfix">
                            <span class="label label-danger bnews-title">Breaking News:</span>
                            
                            <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">
                                     <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datagabungan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                        <div class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
...</strong></a></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="container clearfix">

                    <div class="row">

                        <div class="col-md-8 bottommargin">

                            <div class="col_full bottommargin-lg">
                                <div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                         <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                            <div class="slide" data-thumb="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="">
                                                    <div class="overlay">
                                                        <div class="text-overlay">
                                                            <div class="text-overlay-title">
                                                                <h3><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</h3>
                                                            </div>
                                                            <div class="text-overlay-meta">
                                                                <span><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?>
                                             
                                              
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="col_full nobottommargin clearfix">

                                <div class="fancy-title title-border">
                                    <h3>|BERITA RELAWAN RAHMAD - SUMUT</h3>
                                </div>
                                 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                <div class="col_one_third">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><img class="image_fade" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="Image"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                            
                                        </ul>
                                        <div class="entry-content">
                                            <p><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                

                                <div class="clear"></div>

                                

                            </div>
                            <div class="fancy-title title-border">
                                <h3>PHOTO DAN VIDEO</h3>
                            </div>

                            <div class="col_full masonry-thumbs col-6 bottommargin-lg clearfix" data-big="5" data-lightbox="gallery">
                                   <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_foto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
" data-lightbox="gallery-item" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
"><img class="image_fade" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
"  alt="Gallery Thumb 1"></a>
                                    <?php } ?>
                            </div>

                          <div class="col_full nobottommargin clearfix">

                                <div class="fancy-title title-border">
                                    <h3>|BERITA RELAWAN LAINNYA</h3>
                                </div>
                                 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_anggota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>

                                <div class="col_one_third">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><img class="image_fade" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i><?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                        
                                        </ul>
                                        <div class="entry-content">
                                            <p><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</p>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>

                                <div class="clear"></div>

                                

                            </div>
                        </div>



                        <div class="col-md-4">

                            <div class="line hidden-lg hidden-md"></div>

                            <div class="sidebar-widgets-wrap clearfix">

                                <div class="widget clearfix">
                                   <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <div class="col_one_third nobottommargin">

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
" class="social-icon si-dark  nobottommargin" style="margin-right: 10px;">
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i>
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i>
                                        </a>
                                        <small style="display: block; margin-top: 3px;"><strong><div class="counter counter-inherit"><span data-from="1000" data-to="<?php echo $_smarty_tpl->tpl_vars['rs']->value['pengikut'];?>
" data-refresh-interval="100" data-speed="3000" data-comma="true"></span></div></strong>Pengikut</small>
                                    </div>
                                    <?php } ?>

                                    
                                </div>

                              

                                <div class="widget clearfix">

                                    <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#tabs-1">Agus-Sylvi</a></li>
                                            <li><a href="#tabs-2">Rel. Rahmad</a></li>
                                            <li><a href="#tabs-3">Rel. Lainnya</a></li>
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
                                 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                        <div class="oc-item">
                                        <div class="iportfolio">
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
                                                <h3><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_video'];?>
</h3>
                                                
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>


                                
                            </div>

                        </div>

                    </div>

                </div>

<?php }} ?>
