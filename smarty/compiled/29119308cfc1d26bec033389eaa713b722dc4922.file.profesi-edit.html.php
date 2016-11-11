<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 11:27:55
         compiled from "application\views\private\profesi\profesi-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1516558146750b7cb94-12532935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29119308cfc1d26bec033389eaa713b722dc4922' => 
    array (
      0 => 'application\\views\\private\\profesi\\profesi-edit.html',
      1 => 1477733237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1516558146750b7cb94-12532935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58146750bde623_48416682',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58146750bde623_48416682')) {function content_58146750bde623_48416682($_smarty_tpl) {?><section class="content-header">  <h1>    Profesi    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Profesi      </a>    </li>    <li class="active">Update Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-6">      <!-- form add -->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Update Data Profesi          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_profesi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_profesi'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Id Profesi               </label>              <input type="text" name="id_profesiv" id="id_profesiv" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_profesi'];?>
" maxlength="50" readonly="readonly" />            </div>            <div class="form-group">              <label for="user_name_lama">Nama Profesi *               </label>              <input type="text" name="nama_profesi" id="nama_profesi" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_profesi'];?>
" maxlength="50" />            </div>                      </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
