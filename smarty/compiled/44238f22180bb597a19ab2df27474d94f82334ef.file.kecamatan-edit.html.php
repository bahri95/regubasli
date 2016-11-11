<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 05:31:29
         compiled from "application\views\private\kecamatan\kecamatan-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:177385814126d269072-16280524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44238f22180bb597a19ab2df27474d94f82334ef' => 
    array (
      0 => 'application\\views\\private\\kecamatan\\kecamatan-edit.html',
      1 => 1477711729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177385814126d269072-16280524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5814126d2f1c16_36356941',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'kota' => 0,
    'result_kota' => 0,
    'kota_selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5814126d2f1c16_36356941')) {function content_5814126d2f1c16_36356941($_smarty_tpl) {?><section class="content-header">  <h1>    Kota    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Kecamatan      </a>    </li>    <li class="active">Update Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-6">      <!-- form add -->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Update Data Kota          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_kecamatan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama"> Kota               </label>              <select name="id_kota" class="form-control">                <option value="">--                </option>                <?php  $_smarty_tpl->tpl_vars['result_kota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result_kota']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kota']->key => $_smarty_tpl->tpl_vars['result_kota']->value) {
$_smarty_tpl->tpl_vars['result_kota']->_loop = true;
?>                <option value="<?php echo $_smarty_tpl->tpl_vars['result_kota']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['result_kota']->value['id']==$_smarty_tpl->tpl_vars['kota_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kota']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result_kota']->value['nama'];?>
                </option>                <?php } ?>              </select>            </div>            <div class="form-group">              <label for="id_kecamatanv">Kode Kecamatan *               </label>              <input type="text" name="id_kecamatanv" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  id="id_kecamatanv" class="form-control"  maxlength="10" readonly="readonly" />            </div>            <div class="form-group">              <label for="nama_kecamatan">Nama Kecamatan *               </label>              <input type="text" name="nama_kecamatan" id="nama_kecamatan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" size="45" maxlength="255" />            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
