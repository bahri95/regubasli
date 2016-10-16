<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:53:40
         compiled from "application/views/web/video/play.html" */ ?>
<?php /*%%SmartyHeaderCode:173618420957ea0964e9e9a3-57771413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a57fad5df22634be021f157cfd4f704f60ba05d' => 
    array (
      0 => 'application/views/web/video/play.html',
      1 => 1473848580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173618420957ea0964e9e9a3-57771413',
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
  'unifunc' => 'content_57ea0965083543_55612994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea0965083543_55612994')) {function content_57ea0965083543_55612994($_smarty_tpl) {?><div class="row">  <div class="col-md-12">    <center>      <?php echo $_smarty_tpl->tpl_vars['video_play']->value;?>
      <br />      <span style="display:block;margin-top:10px;font-family:Arial, Helvetica, sans-serif;color:#FFFFFF;"><?php echo $_smarty_tpl->tpl_vars['judul_video']->value;?>
      </span>    </center>    <span style="display:block;margin-top:10px;padding:10px;font-family:Arial, Helvetica, sans-serif;font-size:1em;color:#FFFFFF;">      <?php if ($_smarty_tpl->tpl_vars['keterangan']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['keterangan']->value;?>
      <br /><?php }?>      <?php if ($_smarty_tpl->tpl_vars['sumber']->value!='') {?>Sumber : <?php echo $_smarty_tpl->tpl_vars['sumber']->value;?>
<?php }?>    </span>  </div></div><?php }} ?>
