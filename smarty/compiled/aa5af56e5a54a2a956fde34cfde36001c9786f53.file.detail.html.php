<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:22:46
         compiled from "application/views/web/profil/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:97499524957e9f41654e952-67335548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa5af56e5a54a2a956fde34cfde36001c9786f53' => 
    array (
      0 => 'application/views/web/profil/detail.html',
      1 => 1473861180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97499524957e9f41654e952-67335548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'page_modul' => 0,
    'profil_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f41675a2e4_19315129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f41675a2e4_19315129')) {function content_57e9f41675a2e4_19315129($_smarty_tpl) {?><div class="col-md-9">  <!--start detail desc-->  <div class="b-article-box">    <div class="f-article_title f-primary-l b-title-b-hr">      <?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
    </div>    <div class="b-article__description">      <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
    </div>  </div>  <div class="b-article-box">    <div class="f-article_title f-primary-l b-title-b-hr"> <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['page_modul']->value, 'UTF-8');?>
     </div>    <?php if ($_smarty_tpl->tpl_vars['profil_list']->value!='') {?>    <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profil_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>    <div class="b-twitter-feeds__item b-tabs__content-list-item" style="margin-top:20px;">      <div class="b-twitter-feeds__item_name f-twitter-feeds__item_name f-primary-b">        <i class="fa fa-angle-double-right">        </i>         <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
        </a>       </div>    </div>    <?php } ?>    <?php }?>   </div>  <!--end detail --></div><!--end col 9--><?php }} ?>
