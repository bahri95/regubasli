<?php /* Smarty version Smarty-3.1.17, created on 2016-09-30 04:01:32
         compiled from "application/views/private/asosiasi/asosiasi-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:87695711257ee1bdcb956a0-92146575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ad15318e4980c975a4f41ad16a8e09c3b1b579' => 
    array (
      0 => 'application/views/private/asosiasi/asosiasi-edit.html',
      1 => 1475215504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87695711257ee1bdcb956a0-92146575',
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
  'unifunc' => 'content_57ee1bdcc27655_08714765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee1bdcc27655_08714765')) {function content_57ee1bdcc27655_08714765($_smarty_tpl) {?><section class="content-header">
  <h1>
    Asosiasi Anggota
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
        </i>  Asosiasi Anggota
      </a>
    </li>
    <li class="active">Update Data
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
    <!-- form start -->
    <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_asosiasi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_asosiasi'];?>
" />
      <input type="hidden" name="logo_lama" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['logo_asosiasi'];?>
" />
      <div class="col-md-7">
        <!-- form add -->
        <div class="box box-success">
          <div class="box-header">
            <h3 class="box-title">Update Data  Asosiasi Anggota
            </h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
              <label for="user_name_lama">Logo Asosiasi
              </label>
              <br />
              <div style="text-align:center;background-color:#55D973;padding:10px;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['foto_utama'];?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['data']->value['max_width'];?>
;"  />
              </div>
            </div>
            <div class="form-group">
              <label for="user_name_baru">Upload Logo
              </label>
              <input type="file" name="foto_asosiasi" id="foto_asosiasi" size="50" />
              <p class="help-block">Max. 500Kb
              </p>
            </div>
            <div class="form-group">
              <label for="nama_kota">Nama Asosiasi *
              </label>
              <input type="text" name="nama_asosiasi" id="nama_asosiasi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_asosiasi'];?>
" class="form-control" maxlength="150" />
            </div>
            <div class="form-group">
              <label for="nama_kota">Profil
              </label>
              <textarea name="profil" id="profil" class="form-control" cols="50" rows="10"><?php echo $_smarty_tpl->tpl_vars['data']->value['profil'];?>

              </textarea>
            </div>
            <div class="form-group">
              <label for="nama_kota">Profil English
              </label>
              <textarea name="profil_english" id="profil" class="form-control" cols="50" rows="10"><?php echo $_smarty_tpl->tpl_vars['data']->value['profil_english'];?>

              </textarea>
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
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-4">
        <!-- form add -->
        <div class="box box-success">
          <div class="box-body">
            <div class="form-group">
              <label for="id_propinsi">Provinsi * 
              </label>
              <input type="text" name="nama_propinsi" id="nama_propinsi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_propinsi'];?>
" class="form-control" maxlength="150" />
            </div>
            <div class="form-group">
              <label for="id_propinsi">Kota * 
              </label>
              <div id="kota_area"> 
               <input type="text" name="nama_kota" id="nama_kota" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_kota'];?>
" class="form-control" maxlength="150" />
              </div>
            </div>
            <div class="form-group">
              <label for="nama_kota">Alamat *
              </label>
              <input type="text" name="alamat" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['alamat'];?>
" class="form-control">
            </div>
            <div class="form-group">
              <label for="nama_kota">Kode Pos
              </label>
              <input type="text" name="kodepos" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kodepos'];?>
"  class="form-control"  maxlength="20" />
            </div>
            <div class="form-group">
              <label for="nama_kota">Telepon
              </label>
              <input type="text" name="telepon" id="telepon" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['telepon'];?>
"   class="form-control"  maxlength="30" />
            </div>
            <div class="form-group">
              <label for="nama_kota">Email
              </label>
              <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
"  id="email"  class="form-control"  maxlength="50" />
            </div>
            <div class="form-group">
              <label for="nama_kota">Fax
              </label>
              <input type="text" name="fax" id="fax" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['fax'];?>
" class="form-control"  maxlength="30" />
            </div>
            <div class="form-group">
              <label for="nama_kota">Website
              </label>
              <input type="text" name="website" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['website'];?>
" id="website"  class="form-control" maxlength="50"  />
            </div>
          </div>
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col -->
    </form>
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<script type="text/javascript">
  // tiny
  function LoadKota(url_kota){
    $("#kota_area").load(url_kota);
  }
</script>

<?php }} ?>
