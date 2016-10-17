<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 03:14:39
         compiled from "application\views\private\base-layout\login_layout.html" */ ?>
<?php /*%%SmartyHeaderCode:494580425ff757795-71360626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '236b465343b248e06c5c9c9dc02594eec70fe605' => 
    array (
      0 => 'application\\views\\private\\base-layout\\login_layout.html',
      1 => 1476666852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '494580425ff757795-71360626',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_description' => 0,
    'site_keyword' => 0,
    'site_title' => 0,
    'THEMESPATH' => 0,
    'LOADSTYLE' => 1,
    'LOADJS' => 1,
    'LOADJSCRUD' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580425ff7b53b4_48420520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580425ff7b53b4_48420520')) {function content_580425ff7b53b4_48420520($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name='description' content='<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
' />
    <meta name='keywords' content='<?php echo $_smarty_tpl->tpl_vars['site_keyword']->value;?>
' />
    <meta name='robots' content='index,follow' />
    <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>

    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" />
    
    <?php echo $_smarty_tpl->tpl_vars['LOADSTYLE']->value;?>

    
  </head>
  <body class="skin-blue" onmousemove="change()">
  
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!-- ./wrapper -->
    <!-- javascript loaded -->
    
    <?php echo $_smarty_tpl->tpl_vars['LOADJS']->value;?>

    
    
    <?php echo $_smarty_tpl->tpl_vars['LOADJSCRUD']->value;?>

    
    <!-- end of loaded javascript -->
  </body>
  
</html>
<?php }} ?>
