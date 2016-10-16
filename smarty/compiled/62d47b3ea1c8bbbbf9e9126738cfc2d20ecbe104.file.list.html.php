<?php /* Smarty version Smarty-3.1.17, created on 2016-09-30 02:17:51
         compiled from "application/views/private/asosiasi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:202814631857ee038f2c93e4-60805421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d47b3ea1c8bbbbf9e9126738cfc2d20ecbe104' => 
    array (
      0 => 'application/views/private/asosiasi/list.html',
      1 => 1474286260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202814631857ee038f2c93e4-60805421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'asosiasi' => 0,
    'no' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_delete' => 0,
    'url_anggota' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ee038f3cef28_83852044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee038f3cef28_83852044')) {function content_57ee038f3cef28_83852044($_smarty_tpl) {?><style>  .disp-note{    display:block;    width:100% !important;    ;  }  .display-cell{    width:800px;  }  .close-note{    display:none;  }</style><script type="text/javascript">  function konfirmasi_delete_koleksi(){    tanya = confirm('Apakah anda yakin akan menghapus data ini!');    if(tanya){      return true;    }    else{      return false;    }  }  function display_detail(id, btnid){    var tableview = "table-detail-" + id ;    var tcell = "tcell-" + id ;    var trow = "trow-" + id ;    if($('#' + tableview).hasClass("close-note")){      $("#" + tcell).attr('height','100%');      $("#" + trow).attr('height','100%');      $("#" + tableview).removeClass('close-note');      $("#" + tcell).attr('colspan','8');      $("#" + btnid + ' > i').attr('class','fa fa-close');      $("#" + tableview).show();    }    else{      $("#" + tcell).attr('height','0px');      $("#" + trow).attr('height','0px');      $("#" + tableview).addClass('close-note');      $("#" + btnid + ' > i').attr('class','fa fa-eye');      $("#" + tableview).hide();    }    return false;  }</script><section class="content-header">  <h1>    Asosiasi Anggota    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li class="active">Asosiasi Anggota    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-12">      <!-- Warning box -->           <div class="col-md-12">        <div class="box">          <div class="box-header">            <h3 class="box-title">Data Asosiasi Anggota            </h3>            <div class="box-tools">              <div class="btn-group pull-right">                <a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
" title="Tambah Data" class="btn bg-olive btn-flat">                  <i class='fa fa-plus'>                  </i> Tambah Data                </a>              </div>              <!-- <div class="btn-group pull-right" style="margin-right:10px;"><div class="btn-group"><button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>&nbsp;&nbsp;&nbsp;Laporan</button><ul class="dropdown-menu"><li><a href="javascript:void(0);" onClick="open_modal('Export Data Koleksi Format PDF',$('#modal-export-pdf-content').html(),$('#modal-export-pdf-footer').html(),'medium');"><i class="fa fa-file-pdf-o"></i> Format PDF</a></li></ul></div></div> -->            </div>          </div>          <!-- /.box-header -->          <div class="box-body table-responsive">            <table id="table_datagrid" class="table table-bordered table-striped">              <thead>                <th width="5%">No                 </th>                <th width="13%">Id Asosiasi                </th>                <th width="25%">Nama Asosiasi                </th>                <th width="20%">Kota                </th>                <th width="20%">Provinsi                </th>                <th width="15%">                </th>              </thead>              <tbody>                <?php if ($_smarty_tpl->tpl_vars['asosiasi']->value!='') {?>                <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>                <tr>                  <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
.                  </td>                  <td align="center"><?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
                  </td>                  <td><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_asosiasi'];?>
                  </td>                  <td><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_kota'];?>
                  </td>                  <td><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_propinsi'];?>
                  </td>                  <td align="center">                    <div class="btn-group">                      <a href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
" title="Edit" class="btn btn-success btn-flat">                        <i class='fa fa-pencil'>                        </i>                      </a>&nbsp;                      <a href="<?php echo $_smarty_tpl->tpl_vars['url_delete']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['no_regmus'];?>
" onclick="return konfirmasi_delete();">                        <i class='fa fa-trash'>                        </i>                      </a>                      <a href="javascript:void(0);" onClick="open_modal('Detail Asosiasi',$('#modal-detail-asosiasi<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
').html(),$('#modal-detail-asosiasi-footer').html(),'medium');" title="Lihat Detail" class="btn btn-info btn-flat"><i class='fa fa-eye'></i></a>                     <!--  <a href="<?php echo $_smarty_tpl->tpl_vars['url_anggota']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
" class="btn btn-success btn-flat">                         <i class="glyphicon glyphicon-user" title="Lihat Anggota">                        </i>                      </a> -->                    </div>                   </td>                </tr>                <?php } ?>                <?php }?>              </tbody>              <tfoot>              </tfoot>            </table>          </div>          <!-- /.box-body -->        </div>        <!-- /.box -->      </div>    </div>     <!-- /.row -->  <?php echo $_smarty_tpl->getSubTemplate ("private/asosiasi/detail_asosiasi.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">                  <div class="modal-dialog">                    <div class="modal-content">                      <div class="modal-header">                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>                        <h4 class="modal-title" id="myModalLabel"></h4>                      </div>                      <div class="modal-body" id="modal-bodyku">                      </div>                      <div class="modal-footer" id="modal-footerq">                      </div>                    </div>                  </div>                </div>                <!-- end of modal ------------------------------>    <!-- /.row -->    </section>  <!-- /.content --><?php }} ?>
