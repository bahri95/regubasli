<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 13:38:35
         compiled from "application\views\private\administrator\hapus.html" */ ?>
<?php /*%%SmartyHeaderCode:2171857ea5a3bb5a001-40560721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40fce2d7768e9e6c25a3ce2be06b2307f1f3b307' => 
    array (
      0 => 'application\\views\\private\\administrator\\hapus.html',
      1 => 1474179326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2171857ea5a3bb5a001-40560721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'data_auth' => 0,
    'result_auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea5a3bbe6a28_27544057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea5a3bbe6a28_27544057')) {function content_57ea5a3bbe6a28_27544057($_smarty_tpl) {?><section class="content-header">  <h1>    Pengolah Data    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Pengolah Data      </a>    </li>    <li class="active">Hapus Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <form action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">      <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_user'];?>
" />      <div class="col-md-12">        <div class="box box-success">          <div class="box-header">            <h3 class="box-title">Apakah anda yakin akan menghapus Pengolah Data ini ?            </h3>          </div>        </div>      </div>      <div class="col-md-6">        <!-- form add -->        <div class="box box-success">          <!-- /.box-header -->          <!-- form start -->          <div class="box-body">            <div class="form-group">              <label for="admin_name">Nama Pengolah Data               </label>              <input type="text" name="admin_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['admin_name'];?>
" maxlength="100" id="admin_name" class="form-control" disabled="disabled" />            </div>            <div class="form-group">              <label for="id_auth">Hak Akses *               </label>              <select name="id_auth" class="form-control" disabled="disabled">                <?php  $_smarty_tpl->tpl_vars['result_auth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result_auth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_auth']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_auth']->key => $_smarty_tpl->tpl_vars['result_auth']->value) {
$_smarty_tpl->tpl_vars['result_auth']->_loop = true;
?>                <option value="<?php echo $_smarty_tpl->tpl_vars['result_auth']->value['id_auth'];?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value['id_auth']==$_smarty_tpl->tpl_vars['result_auth']->value['id_auth']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_auth']->value['auth_name'];?>
                </option>                <?php } ?>              </select>            </div>                        <div class="form-group">              <label for="jabatan">Jabatan               </label>              <input type="text" name="jabatan" id="jabatan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['jabatan'];?>
" maxlength="100"  class="form-control" disabled="disabled" />            </div>            <div class="form-group">              <label for="no_telp">No Telp/HP              </label>              <input type="text" name="no_telp" id="no_telp" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['no_telp'];?>
" maxlength="30"  class="form-control" disabled="disabled" />            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-danger">              <i class="fa fa-trash">              </i>  Hapus            </button>            <button type="button" onclick="javascript:document.location='<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
';"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal              </a>          </div>        </div>      </div>      <!-- /.box -->      <div class="col-md-6">        <!-- form add -->        <div class="box box-success">          <div class="box-header">            <h3 class="box-title">Akun Login            </h3>          </div>          <!-- /.box-header -->          <!-- form start -->          <div class="box-body">            <div class="form-group">              <label for="admin_name">Username               </label>              <input type="text" name="user_name_v" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" maxlength="100" id="user_name_v" class="form-control" disabled="disabled"  />            </div>            <div class="form-group">              <label for="admin_name">Password               </label>              <input type="text" name="user_pass" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_pass'];?>
" maxlength="100" id="user_pass" class="form-control" disabled="disabled"/>            </div>            <div class="form-group">              <label for="admin_name">Email               </label>              <input type="text" name="user_mail" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_mail'];?>
" maxlength="100" id="user_mail" class="form-control" disabled="disabled" />            </div>          </div>            </div>      </div>      <!-- /.col -->      </div>    <!-- /.row -->    </section>  <!-- /.content --><?php }} ?>
