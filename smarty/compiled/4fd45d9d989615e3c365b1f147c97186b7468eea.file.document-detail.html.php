<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 10:42:06
         compiled from "application\views\web\base-layout\document-detail.html" */ ?>
<?php /*%%SmartyHeaderCode:131625802fadb732704-76693302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fd45d9d989615e3c365b1f147c97186b7468eea' => 
    array (
      0 => 'application\\views\\web\\base-layout\\document-detail.html',
      1 => 1476693532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131625802fadb732704-76693302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fadb847cd4_85715127',
  'variables' => 
  array (
    'LOADJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fadb847cd4_85715127')) {function content_5802fadb847cd4_85715127($_smarty_tpl) {?>
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
                <div class="container clearfix">
                <div class="postcontent nobottommargin clearfix">

                    

                         <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                       
                </div>
               
                    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

         
                
                </div>
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
