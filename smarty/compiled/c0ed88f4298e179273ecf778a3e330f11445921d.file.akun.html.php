<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 12:01:51
         compiled from "application\views\private\account\akun.html" */ ?>
<?php /*%%SmartyHeaderCode:1308857ea438fc40f87-97298235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ed88f4298e179273ecf778a3e330f11445921d' => 
    array (
      0 => 'application\\views\\private\\account\\akun.html',
      1 => 1473302618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1308857ea438fc40f87-97298235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'url_process_password' => 0,
    'url_process_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea438fcae596_40143329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea438fcae596_40143329')) {function content_57ea438fcae596_40143329($_smarty_tpl) {?><section class="content-header">  <h1>    Akun Login    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-dashboard">        </i> Home      </a>    </li>    <li class="active">Akun Login    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>    <div class="alert alert-danger alert-dismissable">      <i class="fa fa-ban">      </i>      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;      </button>      <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.    </div>    <?php }?>    <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>    <div class="alert alert-success alert-dismissable">      <i class="fa fa-check">      </i>      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;      </button>      <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.    </div>    <?php }?>    <?php }?>    <div class="col-md-4">      <!-- form username -->      <div class="box box-primary">        <div class="box-header">          <h3 class="box-title">Update Username          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Username Lama               </label>              <input type="text" name="user_name_lama" id="user_name_lama" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" class="form-control" maxlength="30" size="30"  disabled="disabled"/>            </div>            <div class="form-group">              <label for="user_name_baru">Username Baru              </label>              <input type="text" name="user_name_baru" id="user_name_baru" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name_baru'];?>
" class="form-control" maxlength="30" size="30" />            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i> Simpan Username            </button>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->    <div class="col-md-4">      <!-- form update password -->      <div class="box box-primary">        <div class="box-header">          <h3 class="box-title">Update Password          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process_password']->value;?>
" method="post">          <input type="hidden" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Password Lama              </label>              <input type="password" name="password_lama" id="password_lama" value="" maxlength="30" size="30" class="form-control"  />            </div>            <div class="form-group">              <label for="user_name_baru">Password Baru              </label>              <input type="password" name="password_baru" id="password_baru" value="" class="form-control" maxlength="30" size="30" />            </div>            <div class="form-group">              <label for="user_name_baru">Ulangi Password Baru              </label>              <input type="password" name="password_confirm" id="password_confirm" value="" class="form-control" maxlength="30" size="30" />            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i> Simpan Password            </button>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->    <div class="col-md-4">      <!-- form update email-->      <div class="box box-primary">        <div class="box-header">          <h3 class="box-title">Update Email          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process_email']->value;?>
" method="post">          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Email Lama              </label>              <input type="text" name="user_mail_lama" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_mail'];?>
"  class="form-control"  maxlength="30" size="30" disabled="disabled" />            </div>            <div class="form-group">              <label for="user_name_baru">Email Baru              </label>              <input type="text" name="user_mail_baru" id="user_mail_baru" value=""  class="form-control"  maxlength="30" size="30" />            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i> Simpan Email            </button>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
