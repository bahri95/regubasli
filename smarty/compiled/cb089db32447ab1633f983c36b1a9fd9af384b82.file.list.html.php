<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:12:03
         compiled from "application\views\private\banner\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2731857ec94933dfe32-91735708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb089db32447ab1633f983c36b1a9fd9af384b82' => 
    array (
      0 => 'application\\views\\private\\banner\\list.html',
      1 => 1475122317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2731857ec94933dfe32-91735708',
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
  'unifunc' => 'content_57ec94934a71e6_97079598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec94934a71e6_97079598')) {function content_57ec94934a71e6_97079598($_smarty_tpl) {?><script type="text/javascript">  function konfirmasi_delete_data(){    tanya = confirm('Apakah anda yakin akan menghapus data ini!');    if(tanya){      return true;    }    else{      return false;    }  }</script><section class="content-header">  <h1>    Banner    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li class="active">Data Banner    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-12">      <div class="box">        <div class="box-header">          <h3 class="box-title">Daftar Banner          </h3>          <div class="box-tools">            <div class="btn-group pull-right">              <a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
" title="Tambah Data" class="btn bg-olive btn-flat">                <i class='fa fa-plus'>                </i> Tambah Banner              </a>            </div>          </div>        </div>        <!-- /.box-header -->        <!-- <div class="box-header"><span class="pull-left" style="margin-left:10px;">Menampilkan <b><?php echo $_smarty_tpl->tpl_vars['start']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</b> dari <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> data</span><div class="box-tools"><?php if ($_smarty_tpl->tpl_vars['total']->value!=0) {?><ul class="pagination pagination-sm no-margin pull-right"><?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
<?php }?></ul><?php }?></div>-->      </div>            <form action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" name="form-album" method="post" onsubmit="javascript:return konfirmasi_delete_data();">        <div class="box-body table-responsive">          <table id="table_datagrid" class="table table-bordered table-striped">            <thead>              <tr>                <th width="5%" id="cekAll">                  <input type="checkbox" class="checked-all" name="checked-all"  id="checked-all"/ class="form-control">                </th>                <th width="6%" align="center">No                </th>                <th width="10%">Banner Indonesia                </th>                <th width="10%">Banner English                </th>                <th width="15%">Nama Banner                </th>                <th width="10%">Masa Aktif                </th>                <th width="10%">Tanggal Mulai                </th>                <th width="10%">Tanggal Berakhir                </th>                <th width="10%">Status                </th>                <th width="7%">                </th>              </tr>            </thead>            <tbody>              <?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>              <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>              <tr>                <td align="center">                  <input type=checkbox name="id_banner[]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_banner'];?>
" class="checkbox" />                </td>                <td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
.                </td>                <td><?php if ($_smarty_tpl->tpl_vars['result']->value['banner']!='') {?>                  <img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['banner'];?>
" width="100" />                  <?php }?>                </td>                <td><?php if ($_smarty_tpl->tpl_vars['result']->value['banner_english']!='') {?>                  <img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['banner_english'];?>
" width="100" />                  <?php }?>                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['nama'];?>
                  <br/>(                  <i><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_english'];?>
                  </i> )                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['masa_aktif'];?>
                </td>                <td><?php if ($_smarty_tpl->tpl_vars['result']->value['masa_aktif']=='sementara') {?>                  <?php echo $_smarty_tpl->tpl_vars['result']->value['tanggal_mulai'];?>
                  <?php } else { ?>                  <center>-                  </center>                  <?php }?>                </td>                <td><?php if ($_smarty_tpl->tpl_vars['result']->value['masa_aktif']=='sementara') {?>                  <?php echo $_smarty_tpl->tpl_vars['result']->value['tanggal_berakhir'];?>
                  <?php } else { ?>                  <center>-                  </center>                  <?php }?>                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['status'];?>
                </td>                <td align="center">                  <div class="btn-group-vertical">                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_banner'];?>
" title="Edit Nama Album" class="btn btn-success btn-flat">                      <i class='fa fa-pencil'>                      </i>                    </a>                  </div>                </td>              </tr>              <?php } ?>              <?php }?>            </tbody>            <tfoot>            </tfoot>          </table>        </div>        <!-- /.box-body -->        <div class="box-footer clearfix">          <input type="submit" name="hapus" value="hapus" class="btn btn-danger"/>          <ul class="pagination pagination-sm no-margin pull-right"> <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
<?php }?>          </ul>            </div>            </form>                  </div>        <!-- /.box -->        </div>    </div>    <!-- /.row -->    </section>  <!-- /.content --><?php }} ?>
