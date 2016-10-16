<?php /* Smarty version Smarty-3.1.17, created on 2016-09-28 18:55:11
         compiled from "application\views\private\video\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1442757ebf5ef2a70c3-58020718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6b62dfe37f80047692f62fae63f047132ff0824' => 
    array (
      0 => 'application\\views\\private\\video\\list.html',
      1 => 1473302640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442757ebf5ef2a70c3-58020718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
    'pagging' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebf5ef379ff5_92769322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebf5ef379ff5_92769322')) {function content_57ebf5ef379ff5_92769322($_smarty_tpl) {?><script type="text/javascript">  function konfirmasi_delete_data(){    tanya = confirm('Apakah anda yakin akan menghapus data ini!');    if(tanya){      return true;    }    else{      return false;    }  }</script><section class="content-header">  <h1>    Video    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li class="active">Video    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-12">      <div class="box">        <div class="box-header">          <h3 class="box-title">Daftar Download          </h3>          <div class="box-tools">            <div class="btn-group pull-right">              <a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
" title="Tambah Data" class="btn bg-olive btn-flat">                <i class='fa fa-plus'>                </i> Tambah Data              </a>            </div>          </div>        </div>        <!-- /.box-header -->                <form action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">          <div style="margin-left:10px;">            <input type="submit" name="hapus" value="hapus" class="btn btn-danger"/>          </div>          <div class="box-body table-responsive">            <table id="table_datagrid" class="table table-bordered table-striped">              <thead>                <tr>                  <th width="2%" align="center">                    <input type="checkbox" name="id_video[]" class="checked-all" value="" />                  </th>                  <th width="6%" align="center">No                  </th>                  <th width="50%">Judul                  </th>                  <th width="19%">Tipe Video                  </th>                  <th width="12%">                  </th>                </tr>              </thead>              <tbody>                <?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>                <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>                <tr>                  <td align="center">                    <input type="checkbox" name="id_video[]" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_video'];?>
" />                  </td>                  <td align="center"><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
.                  </td>                  <td><?php echo $_smarty_tpl->tpl_vars['result']->value['judul_video'];?>
                    <br/>                    (                    <i><?php echo $_smarty_tpl->tpl_vars['result']->value['judul_english'];?>
                    </i>)                    <br />                    <br />                    Video :                     <br /><?php echo $_smarty_tpl->tpl_vars['result']->value['video_file'];?>
                    <br />                    <br />                    <strong>Keterangan:                    </strong>                    <br /><?php echo $_smarty_tpl->tpl_vars['result']->value['keterangan'];?>
                    <br/>                    (                    <i><?php echo $_smarty_tpl->tpl_vars['result']->value['keterangan_english'];?>
                    </i>)                    <br />                    <br />                    <strong>Sumber :                     </strong>                    <br /><?php echo $_smarty_tpl->tpl_vars['result']->value['sumber'];?>
                    <br />                  </td>                  <td align="center"><?php echo $_smarty_tpl->tpl_vars['result']->value['tipe'];?>
                  </td>                  <td align="center">                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_video'];?>
" class="button-edit">Edit                    </a>                    </td>                </tr>                <?php } ?>                <?php }?>              </tbody>              <tfoot>              </tfoot>            </table>          </div>          <!-- /.box-body -->          <div class="box-footer clearfix">            <input type="submit" name="hapus" value="hapus" class="btn btn-danger"/>            <ul class="pagination pagination-sm no-margin pull-right"> <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
<?php }?>            </ul>              </div>              </form>                      </div>          <!-- /.box -->          </div>      </div>      <!-- /.row -->      </section>    <!-- /.content --><?php }} ?>
