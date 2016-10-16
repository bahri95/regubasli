<?php /* Smarty version Smarty-3.1.17, created on 2016-10-03 02:17:02
         compiled from "application/views/private/foto/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:37221620457f1f7de10dce2-15401843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eee0021240276eaffe7aa8c470cec6cb4affd13' => 
    array (
      0 => 'application/views/private/foto/edit.html',
      1 => 1473840282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37221620457f1f7de10dce2-15401843',
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
    'image_album' => 0,
    'id_koleksi' => 0,
    'url_view_pic_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57f1f7e069f3b8_53267033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f1f7e069f3b8_53267033')) {function content_57f1f7e069f3b8_53267033($_smarty_tpl) {?><section class="content-header">  <h1>    Album Foto    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Data Album      </a>    </li>    <li class="active">Edit Data Album    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Tambah Album          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Nama Album *              </label>              <input type="hidden" name="id_album" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_album'];?>
" size="100" maxlength="255" />              <input type="text" name="nama_album" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_album'];?>
" size="100" maxlength="255" />            </div>            <div class="form-group">              <label for="user_name_lama">Nama Album (                <i>English                </i>) *              </label>              <input type="text" name="nama_english" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_english'];?>
" size="100" maxlength="255" />            </div>            <div class="form-group">                    <label for="user_name_lama">Tanggal *                    </label>                    <input type="text" name="tanggal" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>
" class="tanggal_album form-control" size="10" maxlength="10" style="width:150px;" />                  </div>            <div class="form-group">              <div style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['image_album']->value;?>
              </div>              <br />               <label for="user_name_lama">Potongan Gambar <i>(MAX 2 Mb)</i>              </label>               <span>                <input  type="file" accept="image/*" onchange="loadFile(event)"                        style="visibility:hidden; width: 1px;"                        id='foto' name='image_album'                         onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  />                 <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/>                 &nbsp;                <span  class="badge badge-important" >                </span>              </span>            </div>            <center>              <img id="output" style="height:200px; margin-top:20px;">            </center>            <!--upload foto  -->            <input type="hidden" name="id_koleksi" id="id_koleksi" value="<?php echo $_smarty_tpl->tpl_vars['id_koleksi']->value;?>
" />            <input type="hidden" name="url_view_list" id="url_view_list" value="<?php echo $_smarty_tpl->tpl_vars['url_view_pic_list']->value;?>
" />            <input type="hidden" name="nama_koleksi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_koleksi'];?>
 (<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_khusus'];?>
)" />          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><script type="text/javascript">  var loadFile = function(event) {    var output = document.getElementById('output');    output.src = URL.createObjectURL(event.target.files[0]);  };</script><?php }} ?>
