<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 08:33:51
         compiled from "application\views\web\base-layout\document-default.html" */ ?>
<?php /*%%SmartyHeaderCode:2742258046ffdb39581-19412385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f1f0e00ffe08108e46fa60b275a6d3297d304d0' => 
    array (
      0 => 'application\\views\\web\\base-layout\\document-default.html',
      1 => 1476686028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2742258046ffdb39581-19412385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58046ffdb87795_46034333',
  'variables' => 
  array (
    'LOADJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58046ffdb87795_46034333')) {function content_58046ffdb87795_46034333($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="stretched">
    
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/tittle.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">
                
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                 <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
