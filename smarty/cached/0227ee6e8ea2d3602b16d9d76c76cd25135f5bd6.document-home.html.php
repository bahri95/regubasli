<?php /*%%SmartyHeaderCode:62748671257e9ea7d9efc32-82971689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0227ee6e8ea2d3602b16d9d76c76cd25135f5bd6' => 
    array (
      0 => 'application/views/web/base-layout/document-home.html',
      1 => 1474949697,
      2 => 'file',
    ),
    '77a1eda6cc84734346ce9ac641b1f771621654b2' => 
    array (
      0 => 'application/views/web/base-layout/footer.html',
      1 => 1473324244,
      2 => 'file',
    ),
    '54249d7a4b0417223ad09e4f3f43c3674d08e64e' => 
    array (
      0 => 'application/views/web/base-layout/sound.html',
      1 => 1473324242,
      2 => 'file',
    ),
    '3e4aa7eda89dba18595211cb0db30972a746c8fe' => 
    array (
      0 => 'application/views/web/base-layout/header.html',
      1 => 1474235202,
      2 => 'file',
    ),
    '375e12841503a5d2816cf46ff5db3417e152386d' => 
    array (
      0 => 'application/views/web/base-layout/slider.html',
      1 => 1474465628,
      2 => 'file',
    ),
    'f89ff0d94e2e4e28cbde450358002fadc8a6c907' => 
    array (
      0 => 'application/views/web/home/homecontent.html',
      1 => 1474881132,
      2 => 'file',
    ),
    'ccc8b5eec8e072c9fcdf45f0af10877a6823c3d9' => 
    array (
      0 => 'application/views/web/home/anggota_slider.html',
      1 => 1474881133,
      2 => 'file',
    ),
    '1367d782c7ad05708948f1133cb2152cd05ebfd9' => 
    array (
      0 => 'application/views/web/home/aspirasi_slider.html',
      1 => 1474881132,
      2 => 'file',
    ),
    '042745c9cb17218b70b42d49d5999fd34e247558' => 
    array (
      0 => 'application/views/web/home/sponsor_slider.html',
      1 => 1474881133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62748671257e9ea7d9efc32-82971689',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f2e39897e5_88740862',
  'variables' => 
  array (
    'act_lang' => 1,
    'BASEURL' => 1,
    'THEMESPATH' => 1,
    'LOADSTYLE' => 1,
    'LOADJS' => 1,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f2e39897e5_88740862')) {function content_57e9f2e39897e5_88740862($_smarty_tpl) {?><!DOCTYPE html><html>  <head>    <meta charset="utf-8">    <title>    <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>		The center of Information and coordination of Industry Perkelapasawitan Indonesia    <?php } else { ?>      Pusat Informasi dan Koordinasi Industri Perkelapasawitan Indonesia    <?php }?>    </title>    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/favicon.ico">    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" />    <?php echo $_smarty_tpl->tpl_vars['LOADSTYLE']->value;?>
  </head>  <body>    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;">    </div>     <!--removed by integration-->    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/sound.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <div class="j-menu-container">    </div>    <div class="l-main-container" >      <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
     </div>       <footer>
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" target="_blank" class="b-btn-group-hor__item f-btn-group-hor__item">
">
 $_from = $_smarty_tpl->tpl_vars['asosiasifooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" >




        <!-- end of loaded javascript -->  </body></html><?php }} ?>