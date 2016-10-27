<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 04:23:01
         compiled from "application\views\web\video\list.html" */ ?>
<?php /*%%SmartyHeaderCode:291255806d5d7b59657-72168855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efe11dd338921cc892aba5d24276f05673293dbe' => 
    array (
      0 => 'application\\views\\web\\video\\list.html',
      1 => 1476843394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291255806d5d7b59657-72168855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5806d5d7bc2de8_26673593',
  'variables' => 
  array (
    'video_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5806d5d7bc2de8_26673593')) {function content_5806d5d7bc2de8_26673593($_smarty_tpl) {?>

                <div class="container clearfix">

      
                    <div class="clear"></div>

                    <!-- Portfolio Items
                    ============================================= -->
                    <div id="portfolio" class="portfolio-3 clearfix">

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
                                <h3><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_video'];?>
</h3>
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
