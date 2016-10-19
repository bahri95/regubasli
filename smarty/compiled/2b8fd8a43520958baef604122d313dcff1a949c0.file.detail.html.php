<?php /* Smarty version Smarty-3.1.17, created on 2016-10-18 11:08:17
         compiled from "application\views\web\relawan\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:303685804507082e484-84953948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b8fd8a43520958baef604122d313dcff1a949c0' => 
    array (
      0 => 'application\\views\\web\\relawan\\detail.html',
      1 => 1476761276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303685804507082e484-84953948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5804507089f926_28084743',
  'variables' => 
  array (
    'foto' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804507089f926_28084743')) {function content_5804507089f926_28084743($_smarty_tpl) {?>
<div class="single-product">

                            <div class="product">

                                <div class="col_half">

                                    <!-- Product Single - Gallery
                                    ============================================= -->
                                    <div class="product-image">
                                               
                                                <div class="slider-wrap" data-lightbox="gallery">
                                                    <div class="slide" data-thumb="<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" data-lightbox="gallery-item"><img src="<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" alt="Pink Printed Dress"></a></div>
                                                </div>
                                                
                                           
                                      
                                    </div><!-- Product Single - Gallery End -->

                                </div>

                                <div class="col_half col_last product-desc">

                                    <!-- Product Single - Price
                                    ============================================= -->
                                    <div class="product-price"><ins><?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
</ins></div><!-- Product Single - Price End -->

                                    <!-- Product Single - Rating
                                    ============================================= -->
                                   
                                    <div class="clear"></div>
                                    <div class="line"></div>
                                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</p>
                                    <div class="si-share noborder clearfix">
                                        <span>Share:</span>
                                        <div>
                                            <a href="#" class="social-icon si-borderless si-facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-pinterest">
                                                <i class="icon-pinterest"></i>
                                                <i class="icon-pinterest"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-gplus">
                                                <i class="icon-gplus"></i>
                                                <i class="icon-gplus"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-rss">
                                                <i class="icon-rss"></i>
                                                <i class="icon-rss"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-email3">
                                                <i class="icon-email3"></i>
                                                <i class="icon-email3"></i>
                                            </a>
                                        </div>
                                    </div><!-- Product Single - Share End -->

                                </div>

                                <div class="col_full nobottommargin">

                                    <div class="tabs clearfix nobottommargin" id="tab-1">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="hidden-xs">Biografi</span></a></li>
                                            <li><a href="#tabs-2"><i class="icon-trophy"></i><span class="hidden-xs">Pendidikan</span></a></li>
                                            <li><a href="#tabs-3"><i class="icon-shield"></i><span class="hidden-xs">Riwayat Jabatan</span></a></li>
                                            <li><a href="#tabs-4"><i class="icon-star"></i><span class="hidden-xs">Penghargaan</span></a></li>
                                            
                                        </ul>

                                        <div class="tab-container">

                                            <div class="tab-content clearfix" id="tabs-1">
                                                <p><?php echo $_smarty_tpl->tpl_vars['data']->value['deskripsi'];?>
</p>
                                            </div>
                                            <div class="tab-content clearfix" id="tabs-2">
                                                <p><?php echo $_smarty_tpl->tpl_vars['data']->value['pendidikan'];?>
</p>
                                            </div>
                                            <div class="tab-content clearfix" id="tabs-3">
                                                <p><?php echo $_smarty_tpl->tpl_vars['data']->value['riwayat'];?>
</p>
                                            </div>
                                            <div class="tab-content clearfix" id="tabs-4">
                                                <p><?php echo $_smarty_tpl->tpl_vars['data']->value['penghargaan'];?>
</p>
                                            </div>

                                        </div>

                                    </div>

                                   

                                   
                                </div>

                            </div>

                        </div>

                        <div class="clear"></div><div class="line"></div>

                        <div class="col_full nobottommargin">

                            <script type="text/javascript">

                                jQuery(document).ready(function($) {

                                    var ocProduct = $("#oc-product");

                                    ocProduct.owlCarousel({
                                        margin: 30,
                                        nav: true,
                                        navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                        autoplayHoverPause: true,
                                        dots: false,
                                        responsive:{
                                            0:{ items:1 },
                                            600:{ items:2 },
                                            1000:{ items:4 }
                                        }
                                    });

                                });

                            </script>

                  </div>

<?php }} ?>
