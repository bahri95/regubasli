<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:12:05
         compiled from "application\views\private\sosmed\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1474357ec9495dbfd32-44496264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57d384ad3d9f48cde43f60cced606ab8bc71cfc2' => 
    array (
      0 => 'application\\views\\private\\sosmed\\list.html',
      1 => 1473302640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1474357ec9495dbfd32-44496264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'start' => 0,
    'end' => 0,
    'total' => 0,
    'pagging' => 1,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec9495e63e55_84188203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec9495e63e55_84188203')) {function content_57ec9495e63e55_84188203($_smarty_tpl) {?><script type="text/javascript">  function konfirmasi_delete_data(){    tanya = confirm('Apakah anda yakin akan menghapus data ini!');    if(tanya){      return true;    }    else{      return false;    }  }</script><section class="content-header">  <h1>    Sosial Media    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li class="active">Data Sosial Media    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-12">      <div class="box">        <div class="box-header">          <h3 class="box-title">Daftar Sosial Media          </h3>          <div class="box-tools">            <div class="btn-group pull-right">              <a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
" title="Tambah Data" class="btn bg-olive btn-flat">                <i class='fa fa-plus'>                </i> Tambah Sosial Media              </a>            </div>          </div>        </div>        <!-- /.box-header -->        <!-- <div class="box-header"><span class="pull-left" style="margin-left:10px;">Menampilkan <b><?php echo $_smarty_tpl->tpl_vars['start']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</b> dari <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> data</span><div class="box-tools"><?php if ($_smarty_tpl->tpl_vars['total']->value!=0) {?><ul class="pagination pagination-sm no-margin pull-right"><?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
<?php }?></ul><?php }?></div>-->      </div>            <form action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" name="form-album" method="post" onsubmit="javascript:return konfirmasi_delete_data();">        <div class="box-body table-responsive">          <table id="table_datagrid" class="table table-bordered table-striped">            <thead>              <tr>                <th width="5%" id="cekAll">                  <input type="checkbox" class="checked-all" name="checked-all"  id="checked-all"/ class="form-control">                </th>                <th width="6%" align="center">No                </th>                <th width="10%">Nama Sosmed                </th>                <th width="10%">Nama Logo                </th>                <th width="20%">Link                </th>                <th width="7%">                </th>              </tr>            </thead>            <tbody>              <?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>              <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>              <tr>                <td align="center">                  <input type=checkbox name="id_sosmed[]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_sosmed'];?>
" class="checkbox" />                </td>                <td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
.                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['nama'];?>
                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['logo'];?>
                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['link'];?>
                </td>                <td align="center">                  <div class="btn-group-vertical">                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_sosmed'];?>
" title="Edit Nama Album" class="btn btn-success btn-flat">                      <i class='fa fa-pencil'>                      </i>                    </a>                  </div>                </td>              </tr>              <?php } ?>              <?php }?>            </tbody>            <tfoot>            </tfoot>          </table>        </div>        <!-- /.box-body -->        <div class="box-footer clearfix">          <input type="submit" name="hapus" value="hapus" class="btn btn-danger"/>          <ul class="pagination pagination-sm no-margin pull-right"> <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
<?php }?>          </ul>            </div>            </form>                  </div>        <!-- /.box -->        </div>    </div>    <!-- /.row -->    </section>  <!-- /.content --><?php }} ?>
