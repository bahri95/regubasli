<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 13:54:14
         compiled from "application\views\web\berita\list.html" */ ?>
<?php /*%%SmartyHeaderCode:232775804bb17386352-73774792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af50530f45a450c21fef39812867b0478059c92d' => 
    array (
      0 => 'application\\views\\web\\berita\\list.html',
      1 => 1476705252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232775804bb17386352-73774792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5804bb173e3f78_42782253',
  'variables' => 
  array (
    'berita_list' => 0,
    'rs' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804bb173e3f78_42782253')) {function content_5804bb173e3f78_42782253($_smarty_tpl) {?>

              

                <div class="container clearfix">

               

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <!-- Posts
                        ============================================= -->
                        <div id="posts" class="small-thumbs">
      
                             <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                            <div class="entry clearfix">
                                <div class="entry-image">
                                  
                                          
                                                <img class="image_fade" src="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" alt="Standard Post with Gallery">
                                               
                                           
                                       
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 24th February 2014</li>
                                        <li><i class="icon-folder-open"></i> <a href="#">Berita Cagub-Cawagub</a></li>
                                       
                                    </ul>
                                    <div class="entry-content">
                                        <p><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</p>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"class="more-link">Selengkapnya...</a>
                                    </div>
                                </div>
                            </div>

                         <?php } ?>


                        </div><!-- #posts end -->

                        <!-- Pagination
                        ============================================= -->
                        <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?>

                        <ul class="pager nomargin">
                            <li class="previous"><a href="#">&larr; Older</a></li>
                            <li class="next"><a href="#">Newer &rarr;</a></li>
                        </ul><!-- .pager end -->
                        <?php }?>

                </div>
<?php }} ?>
