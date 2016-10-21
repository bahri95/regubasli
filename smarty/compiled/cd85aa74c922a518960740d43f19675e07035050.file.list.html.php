<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 03:15:10
         compiled from "application\views\web\foto\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2628357ec9ca44be750-30929191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd85aa74c922a518960740d43f19675e07035050' => 
    array (
      0 => 'application\\views\\web\\foto\\list.html',
      1 => 1476839707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2628357ec9ca44be750-30929191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec9ca45472f1_52498883',
  'variables' => 
  array (
    'album_list' => 0,
    'foto_list' => 0,
    'rs' => 0,
    'rs_album' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec9ca45472f1_52498883')) {function content_57ec9ca45472f1_52498883($_smarty_tpl) {?>

                <div class="container clearfix">

      
                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio-3 clearfix">

                     <?php if ($_smarty_tpl->tpl_vars['album_list']->value!='') {?>
                                <?php  $_smarty_tpl->tpl_vars['rs_album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs_album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs_album']->key => $_smarty_tpl->tpl_vars['rs_album']->value) {
$_smarty_tpl->tpl_vars['rs_album']->_loop = true;
?>
                       <article class="portfolio-item pf-graphics pf-illustrations">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                        <?php if ($_smarty_tpl->tpl_vars['foto_list']->value!='') {?>
                                            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foto_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['rs']->value['id_album']==$_smarty_tpl->tpl_vars['rs_album']->value['id_album']) {?>
                                            <div class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
" alt="Shake It"></a></div>
                                            <?php }?>
                                            <?php } ?>
                                        <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-overlay" data-lightbox="gallery">
                                 <?php if ($_smarty_tpl->tpl_vars['foto_list']->value!='') {?>
                                <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['foto_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                  <?php if ($_smarty_tpl->tpl_vars['rs']->value['id_album']==$_smarty_tpl->tpl_vars['rs_album']->value['id_album']) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                    <?php }?>
                                 <?php } ?>
                                 <?php }?>
                                </div>
                            </div>
                          <div class="portfolio-desc">
                                <h3><?php echo $_smarty_tpl->tpl_vars['rs_album']->value['nama_album'];?>
</h3>
                                <span>Published : <?php echo $_smarty_tpl->tpl_vars['rs_album']->value['tanggal'];?>
</span>
                            </div>
                        </article>
                        <?php } ?>
                        <?php }?>


                       

                        
                    </div><!-- #portfolio end -->

                    <!-- Portfolio Script
                    ============================================= -->
                    <script type="text/javascript">

                        jQuery(window).load(function(){

                            var $container = $('#portfolio');

                            $container.isotope({ transitionDuration: '0.65s' });

                            $('#portfolio-filter a').click(function(){
                                $('#portfolio-filter li').removeClass('activeFilter');
                                $(this).parent('li').addClass('activeFilter');
                                var selector = $(this).attr('data-filter');
                                $container.isotope({ filter: selector });
                                return false;
                            });

                            $('#portfolio-shuffle').click(function(){
                                $container.isotope('updateSortData').isotope({
                                    sortBy: 'random'
                                });
                            });

                            $(window).resize(function() {
                                $container.isotope('layout');
                            });

                        });

                    </script><!-- Portfolio Script End -->

                </div>


<?php }} ?>
