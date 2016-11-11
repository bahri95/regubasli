<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 05:29:48
         compiled from "application\views\private\kecamatan\kecamatan-hapus.html" */ ?>
<?php /*%%SmartyHeaderCode:239375814174e2081a8-72811112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678b1c7ede44b86b4dabc5d8a1d20b80d0fe8e43' => 
    array (
      0 => 'application\\views\\private\\kecamatan\\kecamatan-hapus.html',
      1 => 1477711786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239375814174e2081a8-72811112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5814174e2c7850_38607487',
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
<?php if ($_valid && !is_callable('content_5814174e2c7850_38607487')) {function content_5814174e2c7850_38607487($_smarty_tpl) {?><section class="content-header">  <h1>    Kota  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Kecamatan      </a>    </li>    <li class="active">Hapus Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-6">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Hapus Kota          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_kecamatan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />          <input type="hidden" name="id_kota" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_kabupaten'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Anda yakin akan menghapus data ini ?              </label>            </div>            <div class="form-group">              <label for="user_name_lama">Kode Kecamatan : <?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
              </label>            </div>            <div class="form-group">              <label for="user_name_lama">Nama Kecamatan : <?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
              </label>            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-danger">              <i class="fa fa-trash">              </i>  Hapus            </button>            <button type="button" onclick="javascript:document.location='<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
';"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal              </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
