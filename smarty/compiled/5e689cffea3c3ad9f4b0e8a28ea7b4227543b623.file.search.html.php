<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 06:48:44
         compiled from "application\views\web\pencarian\search.html" */ ?>
<?php /*%%SmartyHeaderCode:1766157ea4170bc29a4-44939320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e689cffea3c3ad9f4b0e8a28ea7b4227543b623' => 
    array (
      0 => 'application\\views\\web\\pencarian\\search.html',
      1 => 1476852523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1766157ea4170bc29a4-44939320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea4170c53249_60658286',
  'variables' => 
  array (
    'data' => 0,
    'rs' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea4170c53249_60658286')) {function content_57ea4170c53249_60658286($_smarty_tpl) {?>

              

                <div class="container clearfix">

               

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <!-- Posts
                        ============================================= -->
                        <div id="posts" class="small-thumbs">
      
                              <?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
                                <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                        <li><i class="icon-calendar3"></i> <?php echo $_smarty_tpl->tpl_vars['rs']->value['tanggal'];?>
</li>
                                        <li><i class="icon-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori'];?>
</li>
                                       
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
                         <?php }?>


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
