<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 05:03:38
         compiled from "application\views\web\base-layout\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2778257ea3c06f3b4c5-14087113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c7daaeeddbbe8f44bdbbf957481dcdf2f0b6b25' => 
    array (
      0 => 'application\\views\\web\\base-layout\\footer.html',
      1 => 1476846217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2778257ea3c06f3b4c5-14087113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3c0705ab61_12719493',
  'variables' => 
  array (
    'datasosmed' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3c0705ab61_12719493')) {function content_57ea3c0705ab61_12719493($_smarty_tpl) {?>     <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

   <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                       Copyrights © 2016 All Rights Reserved by : PT. Tunas Andalan Abadi<br>
                        
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                         <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
" class="social-icon si-small si-borderless">
                                <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i>
                            </a>
                        <?php } ?>

                        </div>

                        <div class="clear"></div>

                       
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end --><?php }} ?>
