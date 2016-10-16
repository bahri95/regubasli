<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:20:58
         compiled from "application/views/web/base-layout/document-list.html" */ ?>
<?php /*%%SmartyHeaderCode:209605256457e9ee8f97a951-46869459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29647f234f98adf368e200f987eb1e6d47e10c9d' => 
    array (
      0 => 'application/views/web/base-layout/document-list.html',
      1 => 1474949698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209605256457e9ee8f97a951-46869459',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ee8f9e8417_23434069',
  'variables' => 
  array (
    'act_lang' => 1,
    'BASEURL' => 1,
    'THEMESPATH' => 1,
    'LOADSTYLE' => 1,
    'LOADJS' => 0,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ee8f9e8417_23434069')) {function content_57e9ee8f9e8417_23434069($_smarty_tpl) {?><!DOCTYPE html><html>  <head>    <meta charset="utf-8">    <title>    <?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php if ($_smarty_tpl->tpl_vars[\'act_lang\']->value==\'en\') {?>/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
    The center of Information and coordination of Industry Perkelapasawitan Indonesia    <?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php } else { ?>/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
      Pusat Informasi dan Koordinasi Industri Perkelapasawitan Indonesia    <?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php }?>/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
       </title>    <link rel="shortcut icon" href="<?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php echo $_smarty_tpl->tpl_vars[\'BASEURL\']->value;?>
/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
doc/favicon.ico">    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">    <link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php echo $_smarty_tpl->tpl_vars[\'THEMESPATH\']->value;?>
/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
" />    <?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php echo $_smarty_tpl->tpl_vars[\'LOADSTYLE\']->value;?>
/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
  </head>  <body>    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;">    </div>     <!--removed by integration-->    <?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
    <div class="j-menu-container">    </div>    <?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header_detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
    <div class="l-inner-page-container">            <?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/breadcrumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
      <div class="container">        <?php echo '/*%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars[\'template_content\']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:209605256457e9ee8f97a951-46869459%%*/';?>
      </div>          </div>    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
    <!-- javascript loaded -->    <?php echo $_smarty_tpl->tpl_vars['LOADJS']->value;?>
    <!-- end of loaded javascript -->  </body></html><?php }} ?>
