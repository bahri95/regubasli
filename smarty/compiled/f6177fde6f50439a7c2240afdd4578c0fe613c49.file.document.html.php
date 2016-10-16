<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:35:20
         compiled from "application\views\web\base-layout\document.html" */ ?>
<?php /*%%SmartyHeaderCode:759557ea3d58ef60f9-89227805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6177fde6f50439a7c2240afdd4578c0fe613c49' => 
    array (
      0 => 'application\\views\\web\\base-layout\\document.html',
      1 => 1474928084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '759557ea3d58ef60f9-89227805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act_lang' => 1,
    'BASEURL' => 1,
    'datashare' => 1,
    'rs' => 1,
    'THEMESPATH' => 1,
    'LOADSTYLE' => 1,
    'LOADJS' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3d590639a2_83014491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3d590639a2_83014491')) {function content_57ea3d590639a2_83014491($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">    <title>    <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>
    The center of Information and coordination of Industry Perkelapasawitan Indonesia
    <?php } else { ?>
      Pusat Informasi dan Koordinasi Industri Perkelapasawitan Indonesia
    <?php }?>    </title>    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/favicon.ico">
    <?php if ($_smarty_tpl->tpl_vars['datashare']->value!='') {?>
    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datashare']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
" />    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
" />    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
" />    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
" />    <meta property="og:site_name" content="Dewan Minyak Sawit Indonesia" />
    <?php } ?>    <?php }?>	<meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" />
    <?php echo $_smarty_tpl->tpl_vars['LOADSTYLE']->value;?>

  </head>
  <body>    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;">
    </div> 
    <!--removed by integration-->
    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <div class="j-menu-container"></div>    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header_detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <div class="l-main-container">
      <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/breadcrumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
      <div class="l-inner-page-container">        <div class="container">          <div class="row">            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>        </div>
      </div>    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <!-- javascript loaded -->
        <?php echo $_smarty_tpl->tpl_vars['LOADJS']->value;?>

        <!-- end of loaded javascript -->  </body>
</html>
<?php }} ?>
