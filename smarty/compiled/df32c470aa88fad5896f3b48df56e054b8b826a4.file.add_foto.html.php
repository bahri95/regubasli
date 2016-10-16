<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:18:31
         compiled from "application/views/private/foto/add_foto.html" */ ?>
<?php /*%%SmartyHeaderCode:173576027857ecea7728c982-04477329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df32c470aa88fad5896f3b48df56e054b8b826a4' => 
    array (
      0 => 'application/views/private/foto/add_foto.html',
      1 => 1473844514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173576027857ecea7728c982-04477329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
    'url_private' => 0,
    'url_list' => 0,
    'url_list_foto' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ecea77314138_56678282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecea77314138_56678282')) {function content_57ecea77314138_56678282($_smarty_tpl) {?><section class="content-header">  <h1>    Album Foto <?php echo $_smarty_tpl->tpl_vars['album']->value['nama_album'];?>
  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i>Data Album      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list_foto']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">        <i class="fa ">        </i>List Foto      </a>    </li>    <li class="active">Tambah Foto    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Tambah Foto          </h3>          <div class="box-body">            <div class="btn-group pull-right">              <a href="<?php echo $_smarty_tpl->tpl_vars['url_list_foto']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" title="List Foto" class="btn bg-olive btn-flat">                <i class='fa fa-list'>                </i> List Foto              </a>            </div>          </div>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">        <input type="hidden" name="tanggal" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['tanggal'];?>
"/>          <div class="box-body">            <input type="hidden" name="id_album" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">            <div class="form-group">              <label>Pilih File Foto *               </label>              <span>                <input  type="file" accept="image/*" onchange="loadFile(event)"                        style="visibility:hidden; width: 1px;"                        id='foto' name='foto'                         onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  />                 <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/>                 &nbsp;                <span  class="badge badge-important" >                </span>              </span>            </div>            <center>              <img id="output" style="height:200px; margin-top:20px;">            </center>            <div class="form-group">              <label for="user_name_la">Judul *              </label>              <input type="text" name="judul_foto" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_album'];?>
" size="100"  maxlength="255" />            </div>            <div class="form-group">              <label for="user_name_la">Judul (                <i>English                </i>) *              </label>              <input type="text" name="judul_english" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_album'];?>
" size="100" maxlength="255" />            </div>            <div class="row">              <div class="col-md-2">                <label for="urutan">Urutan *                </label>                <input type="number" name="urutan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_album'];?>
" size="100" min="1" maxlength="20" width="50" />              </div>            </div>            <div class="box-footer">             </div>            <!-- box tabel-->          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-upload">              </i>  Upload            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><script type="text/javascript">  var loadFile = function(event) {    var output = document.getElementById('output');    output.src = URL.createObjectURL(event.target.files[0]);  };</script><?php }} ?>
