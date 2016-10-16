<?php /* Smarty version Smarty-3.1.17, created on 2016-10-13 09:07:59
         compiled from "application\views\private\loginadmin\loginform.html" */ ?>
<?php /*%%SmartyHeaderCode:2255757ea41bea0b325-44970911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc81e035079547912715c583bd2aca391b51e76' => 
    array (
      0 => 'application\\views\\private\\loginadmin\\loginform.html',
      1 => 1476247241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2255757ea41bea0b325-44970911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea41bea22a23_12663597',
  'variables' => 
  array (
    'notification_msg' => 0,
    'url_login_process_admin' => 0,
    'url_lupa_pass_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea41bea22a23_12663597')) {function content_57ea41bea22a23_12663597($_smarty_tpl) {?><div class="container">  <div class="row">    <br/>    <center>      <h2>ADMINISTRATOR      </h2>    </center>    <div class="col-sm-4 col-sm-offset-4 login_box">      <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>      <div class="b-form-row">        <div class="b-shortcode-example">          <div class="b-alert-warning f-alert-warning">            <div class="b-right">              <i class="fa fa-times-circle-o">              </i>            </div>            <div class="b-remaining">              <i class="fa fa-exclamation-triangle">              </i><?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
            </div>          </div>        </div>      </div>      <?php }?>      <h3 style="color:#01A9DB">LOGIN      </h3>      <br/>      <form name="form_login2" id="form_login2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_login_process_admin']->value;?>
" class="b-form f-form b-form-inline f-form-inline">        <div class="form-group has-feedback">          <input type="text" id="username" name="userid" class="form-control" placeholder="username">          <i class="form-control-feedback glyphicon glyphicon-user">          </i>        </div>        <div class="form-group has-feedback">          <input type="password" id="password" name="password" class="form-control" placeholder="password">          <i class="form-control-feedback glyphicon glyphicon-lock">          </i>        </div>        <button type="submit" name="b_login" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">LOGIN        </button>        <br/>        <br/>        <center>          <a href="<?php echo $_smarty_tpl->tpl_vars['url_lupa_pass_admin']->value;?>
">Lupa Password?          </a>        </center>        <br/>        </div>      </form>  </div></div><?php }} ?>
