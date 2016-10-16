<?php /* Smarty version Smarty-3.1.17, created on 2016-10-04 07:44:25
         compiled from "application/views/private/kontak/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:44777801357f39619828545-23506344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5a7d4bf53b5064a6f3d9a88ff3b2e55054d2d4c' => 
    array (
      0 => 'application/views/private/kontak/edit.html',
      1 => 1475129600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44777801357f39619828545-23506344',
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
  'unifunc' => 'content_57f39619e04177_63773457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f39619e04177_63773457')) {function content_57f39619e04177_63773457($_smarty_tpl) {?><section class="content-header">  <h1>    Kontak Info    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Kontak      </a>    </li>    <li class="active">Update Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Update Data Kontak Info          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">          <input type="hidden" name="id_kontak" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_kontak'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Email *              </label>              <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" size="100" maxlength="200" class="form-control"  />            </div>            <div class="form-group">              <label for="user_name_lama">Telepon *              </label>              <input type="text" name="telp" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['telp'];?>
" size="100" maxlength="200" class="form-control" style="width:250px;"  />            </div>            <div class="form-group">              <label for="user_name_lama">Fax *              </label>              <input type="text" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['fax'];?>
" size="100" maxlength="200" class="form-control" style="width:250px;"  />            </div>            <div class="form-group">              <label for="user_name_lama">Website               </label>              <input type="text" name="website" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['website'];?>
" size="100" maxlength="200" class="form-control"  />            </div>            <div class="form-group">              <label for="pertanyaan">Alamat *               </label>              <br />              <textarea name="alamat" cols="72" rows="5" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['alamat'];?>
              </textarea>            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
