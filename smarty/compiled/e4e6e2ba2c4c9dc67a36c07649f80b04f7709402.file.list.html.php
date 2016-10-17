<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 09:33:24
         compiled from "application\views\web\informasi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:3105257ea5a8ec74e15-82286138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e6e2ba2c4c9dc67a36c07649f80b04f7709402' => 
    array (
      0 => 'application\\views\\web\\informasi\\list.html',
      1 => 1476689603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3105257ea5a8ec74e15-82286138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea5a8ed30641_57353269',
  'variables' => 
  array (
    'informasi_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea5a8ed30641_57353269')) {function content_57ea5a8ed30641_57353269($_smarty_tpl) {?>

              

                <div class="container clearfix">

               

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <!-- Posts
                        ============================================= -->
                        <div id="posts" class="small-thumbs">
      
                             <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                        <h2><a href="blog-single-small.html"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 24th February 2014</li>
                                        <li><i class="icon-folder-open"></i> <a href="#">Berita Cagub-Cawagub</a></li>
                                       
                                    </ul>
                                    <div class="entry-content">
                                        <p><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</p>
                                        <a href="blog-single-small.html"class="more-link">Selengkapnya...</a>
                                    </div>
                                </div>
                            </div>

                         <?php } ?>


                        </div><!-- #posts end -->

                        <!-- Pagination
                        ============================================= -->
                        <ul class="pager nomargin">
                            <li class="previous"><a href="#">&larr; Older</a></li>
                            <li class="next"><a href="#">Newer &rarr;</a></li>
                        </ul><!-- .pager end -->


                </div>
<?php }} ?>
