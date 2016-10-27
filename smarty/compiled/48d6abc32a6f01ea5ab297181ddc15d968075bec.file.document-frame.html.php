<?php /* Smarty version Smarty-3.1.17, created on 2016-10-27 03:49:03
         compiled from "application\views\web\base-layout\document-frame.html" */ ?>
<?php /*%%SmartyHeaderCode:792358115c2a697962-39930610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d6abc32a6f01ea5ab297181ddc15d968075bec' => 
    array (
      0 => 'application\\views\\web\\base-layout\\document-frame.html',
      1 => 1477532826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '792358115c2a697962-39930610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58115c2a6e1cf6_34463373',
  'variables' => 
  array (
    'LOADJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58115c2a6e1cf6_34463373')) {function content_58115c2a6e1cf6_34463373($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="stretched" style="background-color: #3c8dbc;">
    
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix" >

     
        <section id="content">

            <div class="content-wrap" style="background-color: #3c8dbc;"  >
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
