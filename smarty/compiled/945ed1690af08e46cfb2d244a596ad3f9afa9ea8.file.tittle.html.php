<?php /* Smarty version Smarty-3.1.17, created on 2016-10-18 11:39:55
         compiled from "application\views\web\base-layout\tittle.html" */ ?>
<?php /*%%SmartyHeaderCode:246675802fadb9d25a1-54354037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '945ed1690af08e46cfb2d244a596ad3f9afa9ea8' => 
    array (
      0 => 'application\\views\\web\\base-layout\\tittle.html',
      1 => 1476783576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246675802fadb9d25a1-54354037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fadb9e9cb9_71031574',
  'variables' => 
  array (
    'page_judul' => 0,
    'page_name' => 0,
    'BASEURL' => 0,
    'page_modul_url' => 0,
    'page_modul' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fadb9e9cb9_71031574')) {function content_5802fadb9e9cb9_71031574($_smarty_tpl) {?> <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1><?php echo $_smarty_tpl->tpl_vars['page_judul']->value;?>
</h1>
                <ol class="breadcrumb">
                    <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='') {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
">Home</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['page_modul_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page_modul']->value;?>
</a></li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
</li>
                    <?php } else { ?>
                     <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
">Home</a></li>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['page_modul']->value;?>
</li>
                   
                    <?php }?>
                </ol>
            </div>

        </section><!-- #page-title end --><?php }} ?>
