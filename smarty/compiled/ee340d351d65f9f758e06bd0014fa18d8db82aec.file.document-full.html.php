<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 01:52:36
         compiled from "application\views\web\base-layout\document-full.html" */ ?>
<?php /*%%SmartyHeaderCode:1646657ea41967c04d3-56137456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee340d351d65f9f758e06bd0014fa18d8db82aec' => 
    array (
      0 => 'application\\views\\web\\base-layout\\document-full.html',
      1 => 1476834741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1646657ea41967c04d3-56137456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea4196821f71_76692051',
  'variables' => 
  array (
    'LOADJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea4196821f71_76692051')) {function content_57ea4196821f71_76692051($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="stretched">
    
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/tittle.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">
                
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                
            </div>

        </section><!-- #content end -->

        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- javascript loaded -->
    <?php echo $_smarty_tpl->tpl_vars['LOADJS']->value;?>

    <!-- end of loaded javascript -->

</body>
</html>
<?php }} ?>
