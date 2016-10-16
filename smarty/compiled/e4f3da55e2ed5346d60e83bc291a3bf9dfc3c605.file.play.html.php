<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 03:47:26
         compiled from "application\views\web\video\play.html" */ ?>
<?php /*%%SmartyHeaderCode:420657ec72ae9778f5-59780189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4f3da55e2ed5346d60e83bc291a3bf9dfc3c605' => 
    array (
      0 => 'application\\views\\web\\video\\play.html',
      1 => 1473826980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '420657ec72ae9778f5-59780189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video_play' => 1,
    'judul_video' => 1,
    'keterangan' => 1,
    'sumber' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec72aea08198_27071089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec72aea08198_27071089')) {function content_57ec72aea08198_27071089($_smarty_tpl) {?><div class="row">  <div class="col-md-12">    <center>      <?php echo $_smarty_tpl->tpl_vars['video_play']->value;?>
      <br />      <span style="display:block;margin-top:10px;font-family:Arial, Helvetica, sans-serif;color:#FFFFFF;"><?php echo $_smarty_tpl->tpl_vars['judul_video']->value;?>
      </span>    </center>    <span style="display:block;margin-top:10px;padding:10px;font-family:Arial, Helvetica, sans-serif;font-size:1em;color:#FFFFFF;">      <?php if ($_smarty_tpl->tpl_vars['keterangan']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['keterangan']->value;?>
      <br /><?php }?>      <?php if ($_smarty_tpl->tpl_vars['sumber']->value!='') {?>Sumber : <?php echo $_smarty_tpl->tpl_vars['sumber']->value;?>
<?php }?>    </span>  </div></div><?php }} ?>
