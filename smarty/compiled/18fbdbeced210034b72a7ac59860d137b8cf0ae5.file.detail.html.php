<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 09:26:49
         compiled from "application\views\web\berita\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:112525804bd4e6e1d40-46810431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18fbdbeced210034b72a7ac59860d137b8cf0ae5' => 
    array (
      0 => 'application\\views\\web\\berita\\detail.html',
      1 => 1476862008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112525804bd4e6e1d40-46810431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5804bd4e774519_18171886',
  'variables' => 
  array (
    'data' => 0,
    'berita_list' => 0,
    'rs' => 0,
    'berita_list_kedua' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804bd4e774519_18171886')) {function content_5804bd4e774519_18171886($_smarty_tpl) {?>
                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <div class="single-post nobottommargin">

                            <!-- Single Post
                            ============================================= -->
                            <div class="entry clearfix">

                                <!-- Entry Title
                                ============================================= -->
                                <div class="entry-title">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
</h2>
                                </div><!-- .entry-title end -->

                                <!-- Entry Meta
                                ============================================= -->
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> <?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>
</li>
                                    
                                </ul><!-- .entry-meta end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content notopmargin">

                                    <!-- Entry Image
                                    ============================================= -->
                                    <div class="entry-image alignleft">
                                        <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" alt="Blog Single"></a>
                                        <p><h6><i><?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_gambar'];?>
</i></h6></p>
                                    </div><!-- .entry-image end -->

                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

                                    <!-- Post Single - Content End -->
                                    <div class="line"></div>
                                    <div class="clear"></div>

                                    <!-- Post Single - Share
                                    ============================================= -->
                                  
                                        <span>Bagikan:</span>
                                      <span class='st_facebook_vcount' displayText='Facebook'></span>
                                        <span class='st_twitter_vcount' displayText='Tweet'></span>
                                    

                                </div>
                            </div><!-- .entry end -->

                            <h4>Related Posts:</h4>

                            <div class="related-posts clearfix">

                                <div class="col_half nobottommargin">
                                      <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <div class="mpost clearfix">
                                        <div class="entry-image">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="Blog Single">
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                                
                                            </ul>
                                          
                                        </div>
                                    </div>
                                    <?php } ?>

                                  

                                </div>

                                <div class="col_half nobottommargin col_last">
                                <?php if ($_smarty_tpl->tpl_vars['berita_list_kedua']->value!='') {?>
                                    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list_kedua']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <div class="mpost clearfix">
                                        <div class="entry-image">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="Blog Single">
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                            
                                            </ul>
                                            <div class="entry-content"><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php }?>
                                    

                                </div>

                            </div>

                                <div class="clear"></div>
                               
                        </div>

                    </div><!-- .postcontent end -->



<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=a4abca36-32a8-4c45-9716-281f17242f3b&product=widget"></script>
<script type="text/javascript">stLight.options({publisher: "a4abca36-32a8-4c45-9716-281f17242f3b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<?php }} ?>
