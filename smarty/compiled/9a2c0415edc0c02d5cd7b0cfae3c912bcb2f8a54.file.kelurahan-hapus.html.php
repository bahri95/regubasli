<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 07:32:10
         compiled from "application\views\private\kelurahan\kelurahan-hapus.html" */ ?>
<?php /*%%SmartyHeaderCode:53305814337346a6c6-28168601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2c0415edc0c02d5cd7b0cfae3c912bcb2f8a54' => 
    array (
      0 => 'application\\views\\private\\kelurahan\\kelurahan-hapus.html',
      1 => 1477719127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53305814337346a6c6-28168601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_581433734d3e57_47157365',
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
<?php if ($_valid && !is_callable('content_581433734d3e57_47157365')) {function content_581433734d3e57_47157365($_smarty_tpl) {?><section class="content-header">  <h1>    Kelurahan  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Kelurahan      </a>    </li>    <li class="active">Hapus Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-6">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Hapus Kota          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_kelurahan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />          <input type="hidden" name="id_kecamatan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_kecamatan'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Anda yakin akan menghapus data ini ?              </label>            </div>            <div class="form-group">              <label for="user_name_lama">Kode Kelurahan : <?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
              </label>            </div>            <div class="form-group">              <label for="user_name_lama">Nama Kelurahan : <?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
              </label>            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-danger">              <i class="fa fa-trash">              </i>  Hapus            </button>            <button type="button" onclick="javascript:document.location='<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
';"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal              </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
