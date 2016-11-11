<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 07:24:34
         compiled from "application\views\private\kelurahan\kelurahan-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1296958142d04998027-11350170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01aeec199adca373fde2af9f622618a5a77625c2' => 
    array (
      0 => 'application\\views\\private\\kelurahan\\kelurahan-edit.html',
      1 => 1477718672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1296958142d04998027-11350170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58142d04a20bc0_44437947',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'kecamatan' => 0,
    'result_kecamatan' => 0,
    'kecamatan_selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58142d04a20bc0_44437947')) {function content_58142d04a20bc0_44437947($_smarty_tpl) {?><section class="content-header">  <h1>    Kota    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Kelurahan      </a>    </li>    <li class="active">Update Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-6">      <!-- form add -->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Update Data Kota          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_kelurahan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama"> Kecamatan              </label>              <select name="id_kecamatan" class="form-control">                <option value="">--                </option>                <?php  $_smarty_tpl->tpl_vars['result_kecamatan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result_kecamatan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kecamatan']->key => $_smarty_tpl->tpl_vars['result_kecamatan']->value) {
$_smarty_tpl->tpl_vars['result_kecamatan']->_loop = true;
?>                <option value="<?php echo $_smarty_tpl->tpl_vars['result_kecamatan']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['result_kecamatan']->value['id']==$_smarty_tpl->tpl_vars['kecamatan_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kecamatan']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result_kecamatan']->value['nama'];?>
                </option>                <?php } ?>              </select>            </div>            <div class="form-group">              <label for="id_kelurahanv">Kode Kelurahan *               </label>              <input type="text" name="id_kelurahanv" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  id="id_kelurahanv" class="form-control"  maxlength="10" readonly="readonly" />            </div>            <div class="form-group">              <label for="nama_kelurahan">Nama Kelurahan *               </label>              <input type="text" name="nama_kelurahan" id="nama_kelurahan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" size="45" maxlength="255" />            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
