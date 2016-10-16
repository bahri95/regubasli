<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 12:01:47
         compiled from "application\views\private\account\status.html" */ ?>
<?php /*%%SmartyHeaderCode:2208357ea438bb32313-81736152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8c111fd95363b1f6acb71ff53c90bd9277b0b66' => 
    array (
      0 => 'application\\views\\private\\account\\status.html',
      1 => 1474617794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2208357ea438bb32313-81736152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'url_process_foto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea438bbce732_31792492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea438bbce732_31792492')) {function content_57ea438bbce732_31792492($_smarty_tpl) {?><section class="content-header">  <h1>    Profil    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-dashboard">        </i> Home      </a>    </li>    <li class="active">Profil    </li>  </ol></section><!-- Main content --><section class="content">  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>    <div class="alert alert-danger alert-dismissable">      <i class="fa fa-ban">      </i>      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;      </button>      <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.    </div>    <?php }?>    <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>    <div class="alert alert-success alert-dismissable">      <i class="fa fa-check">      </i>      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;      </button>      <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.    </div>    <?php }?>    <?php }?>    <div class="col-md-6">      <!-- form username -->      <div class="box box-primary">        <div class="box-header">          <h3 class="box-title">Update Profil          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_user'];?>
" />          <input type="hidden" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_baru">Nama Instansi              </label>              <input type="text" name="nama_museum" id="nama_museum" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_asosiasi'];?>
" class="form-control" maxlength="30" size="30" disabled="disabled" />            </div>            <div class="form-group">              <label for="admin_name">Nama *               </label>              <input type="text" name="admin_name" id="admin_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['admin_name'];?>
" class="form-control" maxlength="30" size="30"  />            </div>            <div class="form-group">              <label for="admin_name">Jenis Kelamin *               </label>              <div class="radio">                <label>                  <input type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="L" <?php if ($_smarty_tpl->tpl_vars['data']->value['jenis_kelamin']=='L') {?>checked="checked"<?php }?>>                  Laki-laki                </label>              </div>              <div class="radio">                <label>                  <input type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="P" <?php if ($_smarty_tpl->tpl_vars['data']->value['jenis_kelamin']=='P') {?>checked="checked"<?php }?>>                  Perempuan                </label>              </div>            </div>            <div class="form-group">              <label for="jabatan">Jabatan               </label>              <input type="text" name="jabatan" id="jabatan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['jabatan'];?>
" class="form-control" maxlength="30" size="30"  />            </div>            <!--  <div class="form-group"><label for="no_sk">No SK</label><input type="text" name="no_sk" id="no_sk" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['no_sk'];?>
" class="form-control" maxlength="30" size="30"  /></div> -->            <div class="form-group">              <label for="no_telp">No Telp/Hp *               </label>              <input type="text" name="no_telp" id="no_telp" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['no_telp'];?>
" class="form-control" maxlength="30" size="30"  />            </div>            <div class="form-group">              <label for="last_login">Login Terakhir : <?php echo $_smarty_tpl->tpl_vars['data']->value['login_date'];?>
              </label>            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i> Simpan             </button>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->    <div class="col-md-6">      <!-- form username -->      <div class="box box-primary">        <div class="box-header">          <h3 class="box-title">Update Foto          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process_foto']->value;?>
" method="post" enctype="multipart/form-data">          <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_user'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Foto User               </label>              <br />              <div style="text-align:center">                <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['photo'];?>
" style="max-width:200px;"  />              </div>            </div>            <div class="form-group">              <label for="user_name_baru">Upload Foto              </label>              <input type="file" name="foto" id="foto" size="50" />              <p class="help-block">Max. 500Kb              </p>            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <span class="glyphicon glyphicon-picture">              </span>  Simpan Foto            </button>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- right col --></div><!-- /.row (main row) --></section><!-- /.content --><?php }} ?>
