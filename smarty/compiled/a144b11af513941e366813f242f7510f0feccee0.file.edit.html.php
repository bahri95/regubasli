<?php /* Smarty version Smarty-3.1.17, created on 2016-10-25 18:54:29
         compiled from "application\views\private\banner\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:17479580f8e456a5792-81027914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a144b11af513941e366813f242f7510f0feccee0' => 
    array (
      0 => 'application\\views\\private\\banner\\edit.html',
      1 => 1474253362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17479580f8e456a5792-81027914',
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
    'banner' => 0,
    'banner_en' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580f8e458e3ba1_48287969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580f8e458e3ba1_48287969')) {function content_580f8e458e3ba1_48287969($_smarty_tpl) {?><section class="content-header">  <h1>    Banner    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i>Data Banner      </a>    </li>    <li class="active">Update Data Banner    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Update Banner          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">          <div class="box-body">            <div class="form-group">              <input type="hidden" name="id_banner" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_banner'];?>
" size="100" maxlength="255" />              <label for="user_name_lama">Nama Banner *              </label>              <input type="text" name="nama_banner" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" size="100" maxlength="255" />            </div>            <div class="form-group">              <label for="user_name_lama">Nama Banner (                <i>English                </i>) *              </label>              <input type="text" name="nama_english" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_english'];?>
" size="100" maxlength="255" />            </div>            <div class="form-group">              <label for="admin_name">Masa Aktif *               </label>              <select id="show" class="form-control" name="masa_aktif" onchange="change()" style="width:200px;">                <option value="sementara" <?php if ($_smarty_tpl->tpl_vars['data']->value['masa_aktif']=='sementara') {?>selected="selected"<?php }?>>Sementara                </option>                <option value="tetap" <?php if ($_smarty_tpl->tpl_vars['data']->value['masa_aktif']=='tetap') {?>selected="selected"<?php }?>>Tetap                </option>              </select>            </div>            <div class="form-group">              <div class="form-group">                <label for="user_name_lama" id="label_tgl_mulai">Tanggal Mulai                </label>                <input type="text" name="tanggal_mulai" id="tgl_mulai" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal_mulai'];?>
" class="tanggal form-control" size="10" maxlength="10" style="width:150px;" />              </div>              <div class="form-group">                <label for="user_name_lama" id="label_tgl_akhir">Tanggal Berakhir                </label>                <input type="text" name="tanggal_berakhir" id="tgl_akhir" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal_berakhir'];?>
" class="tanggal form-control" size="10" maxlength="10" style="width:150px;" />              </div>              <div class="form-group">                <label for="admin_name">Status *                 </label>                <select  class="form-control" name="status" style="width:200px;">                  <option value="active" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='active') {?>selected="selected"<?php }?>>Aktif                  </option>                  <option value="nonactive" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='nonactive') {?>selected="selected"<?php }?>>Tidak Aktif                  </option>                </select>              </div>              <div class="row">                <div class="col-md-2">                  <label for="urutan">Urutan *                  </label>                  <input type="number" name="urutan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['urutan'];?>
" size="100" min="1" maxlength="20" width="50" />                </div>              </div>              <br/>              <div class="form-group">                <label for="user_name_lama">Banner Indonesia <i>(1361x504)</i>                </label>                 <span>                  <input type="file" accept="image/*"  onchange="showMyImage(this)"                         style="visibility:hidden; width: 1px;"                          name='banner'                           onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  />                   <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/>                   &nbsp;                  <span  class="badge badge-important" >                  </span>                </span>              </div>              <img id="thumbnil" style="width:50%; margin-top:10px;"/>              <div style="text-align:center;width:50%; margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['banner']->value;?>
              </div>              <br />              <div class="form-group">                <label for="user_name_lama">Banner English <i>(1361x504)</i>                </label>                 <span>                  <input type="file" accept="image/*" onchange="loadFile(event)"                          style="visibility:hidden; width: 1px;"                          name='banner_en'                           onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  />                   <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/>                   &nbsp;                  <span  class="badge badge-important" >                  </span>                </span>              </div>              <img id="output" style="width:50%; margin-top:10px;"/>              <div style="text-align:center;width:50%; margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['banner_en']->value;?>
              </div>              <br />            </div>            <!-- /.box-body -->            <div class="box-footer">              <button type="submit" class="btn btn-primary">                <i class="fa fa-save">                </i>  Simpan              </button>              <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">                <i class="fa fa-close">                </i>  Batal              </a>            </div>            </form>          </div>        <!-- /.box -->      </div>      <!-- /.col -->    </div>    <!-- /.row -->    </section>  <!-- /.content -->    <script>    //image indo    function showMyImage(fileInput) {      var files = fileInput.files;      for (var i = 0; i < files.length; i++) {        var file = files[i];        var imageType = /image.*/;        if (!file.type.match(imageType)) {          continue;        }        var img=document.getElementById("thumbnil");        img.file = file;        var reader = new FileReader();        reader.onload = (function(aImg) {          return function(e) {            aImg.src = e.target.result;          };        }                        )(img);        reader.readAsDataURL(file);      }    }    //image english    var loadFile = function(event) {      var output = document.getElementById('output');      output.src = URL.createObjectURL(event.target.files[0]);    };    function change() {      var selectBox = document.getElementById("show");      var selected = selectBox.options[selectBox.selectedIndex].value;      if(selected === 'sementara'){        $('#label_tgl_mulai').show();        $('#label_tgl_akhir').show();        $('#tgl_mulai').show();        $('#tgl_akhir').show();      }      else{        $('#label_tgl_mulai').hide();        $('#label_tgl_akhir').hide();        $('#tgl_mulai').hide();        $('#tgl_akhir').hide();      }    }  </script>  <?php }} ?>
