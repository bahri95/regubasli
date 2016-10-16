<?php /* Smarty version Smarty-3.1.17, created on 2016-10-02 17:48:56
         compiled from "application/views/private/informasi/add.html" */ ?>
<?php /*%%SmartyHeaderCode:66271301057f17f90ee1da5-56391626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b59b22e02fd6f32b15288e3de812f26aa83caab0' => 
    array (
      0 => 'application/views/private/informasi/add.html',
      1 => 1475444924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66271301057f17f90ee1da5-56391626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57f17f91251280_98968820',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'listkategori' => 0,
    'result' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f17f91251280_98968820')) {function content_57f17f91251280_98968820($_smarty_tpl) {?><section class="content-header">
  <h1>
    Informasi
    <small>panel
    </small>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">
        <i class="fa fa-home">
        </i> Home
      </a>
    </li>
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">
        <i class="fa ">
        </i> Informasi
      </a>
    </li>
    <li class="active">Tambah Data
    </li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- notification template -->
    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>
    <div class="col-md-12">
      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>
      <div class="alert alert-danger alert-dismissable">
        <i class="fa fa-ban">
        </i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.
      </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>
      <div class="alert alert-success alert-dismissable">
        <i class="fa fa-check">
        </i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.
      </div>
      <?php }?>
    </div>
    <?php }?>
    <div class="col-md-9">
      <!-- form update email-->
      <div class="box box-success">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#tab_1" data-toggle="tab">Indonesia
              </a>
            </li>
            <li>
              <a href="#tab_2" data-toggle="tab">English
              </a>
            </li>
          </ul>
          <!-- form start -->
          <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box-body">
                  <div class="form-group">
                    <label for="user_name_lama">Kategori Informasi
                    </label>
                    <select name="id_kategori" class="form-control" > 
                      <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listkategori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_kategori'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['kategori'];?>

                      </option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Judul Informasi * 
                    </label>
                    <input type="text" name="judul" id="judul" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
" class="form-control" size="50" maxlength="255" />
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Tanggal Informasi *
                    </label>
                    <input type="text" name="tanggal" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>
" class="tanggal form-control" size="10" maxlength="10" style="width:150px;" />
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Isi Informasi
                    </label>
                    <textarea name="content" cols="72" rows="10"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">File Gambar 
                      <i>(Maks 5 Mb)
                      </i>
                    </label>
                    <span>
                      <input type="file" accept="image/*" onchange="loadFile(event)" 
                             style="visibility:hidden; width: 1px;" 
                             id='foto' name='image_informasi'  
                             onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 
                      <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 
                      &nbsp;
                      <span  class="badge badge-important" >
                      </span>
                    </span>
                  </div>
                  <center>
                    <img id="output" style="width:50%; margin-top:10px;"/>
                  </center>
                  <div class="form-group">
                    <label for="user_name_lama">Keterangan Gambar
                    </label>
                    <input type="text" name="keterangan_gambar" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_gambar'];?>
" size="100" maxlength="200" class="form-control" />
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.tabs pane 1-->
              <!-- tab 2-->
              <div class="tab-pane" id="tab_2">
                <div class="box-body">
                  <div class="form-group">
                    <label for="user_name_lama">Judul Informasi 
                      <i>(English)
                      </i> * 
                    </label>
                    <input type="text" name="judul_english" id="judul" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul_english'];?>
" class="form-control" size="50" maxlength="255" />
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Isi Informasi 
                      <i>(English)
                      </i> *
                    </label>
                    <textarea name="content_english" cols="72" rows="10"><?php echo $_smarty_tpl->tpl_vars['data']->value['content_english'];?>

                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Keterangan Gambar 
                      <i>(English)
                      </i> *
                    </label>
                    <input type="text" name="caption_picture" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['caption_picture'];?>
" size="100" maxlength="200" class="form-control" />
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save">
                    </i>  Simpan
                  </button>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">
                    <i class="fa fa-close">
                    </i>  Batal
                  </a>
                </div>
              </div>
              <!-- /.tabs pane 2-->
            </div>
            <!-- /.tabs content-->
          </form>
        </div>
        <!-- /.tabs customs-->
        </form>
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  </div>
<!-- /.row -->
</section>
<!-- /.content -->

<script type="text/javascript">
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

<?php }} ?>
