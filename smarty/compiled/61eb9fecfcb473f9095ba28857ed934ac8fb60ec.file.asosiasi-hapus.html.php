<?php /* Smarty version Smarty-3.1.17, created on 2016-09-30 04:02:43
         compiled from "application/views/private/asosiasi/asosiasi-hapus.html" */ ?>
<?php /*%%SmartyHeaderCode:24263325657ee1c2332b7e7-80423931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61eb9fecfcb473f9095ba28857ed934ac8fb60ec' => 
    array (
      0 => 'application/views/private/asosiasi/asosiasi-hapus.html',
      1 => 1474679830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24263325657ee1c2332b7e7-80423931',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ee1c23527108_53168083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1c23527108_53168083')) {function content_57ee1c23527108_53168083($_smarty_tpl) {?><section class="content-header">  <h1>    Asosiasi Anggota    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Asosiasi Anggota      </a>    </li>    <li class="active">Hapus Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <!-- form start -->    <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">      <input type="hidden" name="id_asosiasi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_asosiasi'];?>
" />      <div class="col-md-12">        <div class="box box-warning">          <div class="box-header" style="text-align:center">            <h3 >Hapus Data Asosiasi Anggota            </h3>            <h3  style="text-align:center">Apakah anda akan menghapus data asosiasi ini ?             </h3>          </div>        </div>      </div>      <div class="col-md-6">        <!-- form add -->        <div class="box box-success">          <!-- /.box-header -->          <div class="box-body">            <table id="table_datagrid" class="table table-bordered table-striped">              <tr>                <td>Nama Asosiasi                 </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nama_asosiasi'];?>
                </td>              </tr>              <tr>                <td>Alamat                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['alamat'];?>
                </td>              </tr>              <tr>                <td>Provinsi                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nama_propinsi'];?>
                </td>              </tr>              <tr>                <td>Kota                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nama_kota'];?>
                </td>              </tr>                <tr>                <td>Kode Pos                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['kodepos'];?>
                </td>              </tr>                 <tr>                <td>Telepon                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['telepon'];?>
                </td>              </tr>                  <tr>                <td>Email                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
                </td>              </tr>              </table>             </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-danger">              <i class="fa fa-trash">              </i>  Hapus            </button>            <button type="button" onclick="javascript:document.location='<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
';"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal              </a>          </div>        </div>        <!-- /.box -->      </div>      <!-- /.col -->      <div class="col-md-6">        <!-- form add -->        <div class="box box-success">          <div class="box-body">            <table id="table_datagrid" class="table table-bordered table-striped">              <tr>                <td>Fax                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['fax'];?>
                </td>              </tr>                 <tr>                <td>Website                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['website'];?>
                </td>              </tr>                <tr>                <td>Profil                </td>                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['profil'];?>
                </td>              </tr>                </table>          </div>        </div>        <!-- /.box -->       </div>      <!-- /.col -->    </form>  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
