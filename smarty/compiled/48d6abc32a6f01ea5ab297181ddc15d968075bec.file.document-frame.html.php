<?php /* Smarty version Smarty-3.1.17, created on 2016-10-16 08:37:39
         compiled from "application\views\web\base-layout\document-frame.html" */ ?>
<?php /*%%SmartyHeaderCode:229257ea41be7e84a4-82421334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d6abc32a6f01ea5ab297181ddc15d968075bec' => 
    array (
      0 => 'application\\views\\web\\base-layout\\document-frame.html',
      1 => 1476259978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229257ea41be7e84a4-82421334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea41be849f34_29848674',
  'variables' => 
  array (
    'LOADJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea41be849f34_29848674')) {function content_57ea41be849f34_29848674($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="stretched" style="background-color: #90cde5;">
    
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix" >

     
        <section id="content">

            <div class="content-wrap" style="background-color: #90cde5;"  >
                <div class="container clearfix" >
                
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                
                
                </div>
            </div>

        </section><!-- #content end -->

      

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
