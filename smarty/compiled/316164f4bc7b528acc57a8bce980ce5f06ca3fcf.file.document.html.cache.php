<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:15:12
         compiled from "application/views/web/base-layout/document.html" */ ?>
<?php /*%%SmartyHeaderCode:20811175257e9edd3b2b8c4-23017463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '316164f4bc7b528acc57a8bce980ce5f06ca3fcf' => 
    array (
      0 => 'application/views/web/base-layout/document.html',
      1 => 1474949698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20811175257e9edd3b2b8c4-23017463',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9edd3bb4947_17537232',
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
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9edd3bb4947_17537232')) {function content_57e9edd3bb4947_17537232($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">    <title>    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php if ($_smarty_tpl->tpl_vars[\'act_lang\']->value==\'en\') {?>/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>

    The center of Information and coordination of Industry Perkelapasawitan Indonesia
    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php } else { ?>/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>

      Pusat Informasi dan Koordinasi Industri Perkelapasawitan Indonesia
    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php }?>/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
    </title>    <link rel="shortcut icon" href="<?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->tpl_vars[\'BASEURL\']->value;?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
doc/favicon.ico">
    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php if ($_smarty_tpl->tpl_vars[\'datashare\']->value!=\'\') {?>/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>

    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php  $_smarty_tpl->tpl_vars[\'rs\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'rs\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'datashare\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'rs\']->key => $_smarty_tpl->tpl_vars[\'rs\']->value) {
$_smarty_tpl->tpl_vars[\'rs\']->_loop = true;
?>/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>

    <meta property="og:title" content="<?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->tpl_vars[\'rs\']->value[\'judul\'];?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
" />    <meta property="og:url" content="<?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->tpl_vars[\'rs\']->value[\'url_detail\'];?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
" />    <meta property="og:image" content="<?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->tpl_vars[\'rs\']->value[\'image\'];?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
" />    <meta property="og:description" content="<?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->tpl_vars[\'rs\']->value[\'content\'];?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
" />    <meta property="og:site_name" content="Dewan Minyak Sawit Indonesia" />
    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php } ?>/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php }?>/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->tpl_vars[\'THEMESPATH\']->value;?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
" />
    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->tpl_vars[\'LOADSTYLE\']->value;?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>

  </head>
  <body>    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;">
    </div> 
    <!--removed by integration-->
    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
    <div class="j-menu-container"></div>    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header_detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
    <div class="l-main-container">
      <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/breadcrumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
      <div class="l-inner-page-container">        <div class="container">          <div class="row">            <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars[\'template_content\']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
            <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>

          </div>        </div>
      </div>    </div>
    <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>
    <!-- javascript loaded -->
        <?php echo '/*%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/<?php echo $_smarty_tpl->tpl_vars[\'LOADJS\']->value;?>
/*/%%SmartyNocache:20811175257e9edd3b2b8c4-23017463%%*/';?>

        <!-- end of loaded javascript -->  </body>
</html>
<?php }} ?>
