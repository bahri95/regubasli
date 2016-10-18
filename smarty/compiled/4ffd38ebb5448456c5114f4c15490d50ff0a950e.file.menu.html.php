<?php /* Smarty version Smarty-3.1.17, created on 2016-10-18 08:03:57
         compiled from "application\views\web\base-layout\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:31215802fa18e9c632-59919313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ffd38ebb5448456c5114f4c15490d50ff0a950e' => 
    array (
      0 => 'application\\views\\web\\base-layout\\menu.html',
      1 => 1476770635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31215802fa18e9c632-59919313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fa190486e5_56451475',
  'variables' => 
  array (
    'BASEURL' => 0,
    'profil' => 0,
    'rs' => 0,
    'relawan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fa190486e5_56451475')) {function content_5802fa190486e5_56451475($_smarty_tpl) {?><header id="header" class="sticky-style-2">

            <div class="container clearfix">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/doc/banner/asli.png"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/doc/banner/asli.png" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/doc/banner/asli.png"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/doc/banner/asli.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <div class="top-advert">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/doc/banner/banner.jpg" alt="Ad">
                </div>

            </div>

            <div id="header-wrap">

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <ul>
                            
                             <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
"><div>HOME</div></a>
                                
                            </li>
                            <li><a href="index.html"><div>PROFIL ASLI</div></a>
                            <ul>
                                    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
index.php/public/profil/detail/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_info'];?>
"><div>PROFIL <?php echo $_smarty_tpl->tpl_vars['rs']->value['nama'];?>
</div></a>
                                    </li>
                                    <?php } ?>
                                     
                                </ul>
                                    
                                
                            </li>
                            <li><a href="#"><div>PROFIL RELAWAN</div></a>
                                <ul>
                                    
                                    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relawan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
index.php/public/relawan/detail/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_relawan'];?>
"><div>Relawan <?php echo $_smarty_tpl->tpl_vars['rs']->value['nama'];?>
</div></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </li>
                            
                            <li><a href="shop.html"><div>BERITA</div></a>
                                <ul>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
index.php/public/informasi"><div>KEGIATAN AGUS SILVY</div></a></li>
                                    <li><a href="#"><div>KEGIATAN RELAWAN</div></a>
                                        <ul>
                                        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relawan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
index.php/public/berita/relawan/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_relawan'];?>
"><div>RELAWAN <?php echo $_smarty_tpl->tpl_vars['rs']->value['nama'];?>
</div></a>
                                    </li>
                                        <?php } ?>
                                   
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                           <li><a href="index.html"><div>PHOTO</div></a>
                                
                            </li>
                            <li><a href="index.html"><div>VIDEO</div></a>
                                
                            </li>

                            <li><a href="index.html"><div>KONTAK</div></a>
                                
                            </li>
                        </ul>

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </div>

                </nav><!-- #primary-menu end -->

            </div>

        </header><!-- #header end -->
<?php }} ?>
