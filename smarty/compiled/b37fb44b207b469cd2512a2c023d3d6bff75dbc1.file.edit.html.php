<?php /* Smarty version Smarty-3.1.17, created on 2016-10-18 04:13:03
         compiled from "application\views\private\sosmed\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1621558058516f23707-86449401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b37fb44b207b469cd2512a2c023d3d6bff75dbc1' => 
    array (
      0 => 'application\\views\\private\\sosmed\\edit.html',
      1 => 1476756781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621558058516f23707-86449401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580585170d74b1_84765279',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'logo' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580585170d74b1_84765279')) {function content_580585170d74b1_84765279($_smarty_tpl) {?><section class="content-header">  <h1>    Sosial Media    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i>Data Sosial Media      </a>    </li>    <li class="active">Update Data Sosial Media    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Update Sosial Media          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">          <div class="box-body">            <div class="form-group">              <input type="hidden" name="id_sosmed" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_sosmed'];?>
" size="100" maxlength="255" />              <label for="user_name_lama">Nama Sosial Media *              </label>              <input type="text" name="nama_sosmed" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" size="100" maxlength="255" />            </div>            <div class="form-group">              <label for="admin_name">Nama Logo *               </label>              <select  class="form-control" name="id_logo" style="width:200px;">                <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>                <option value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_logo'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['id_logo']==$_smarty_tpl->tpl_vars['result']->value['id_logo']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result']->value['logo'];?>
                </option>                <?php } ?>              </select>            </div>            <div class="form-group">              <label for="user_name_lama">Link *              </label>              <input type="text" name="link" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['link'];?>
" size="100" maxlength="255" />            </div>            <div class="row">              <div class="col-md-2">                <label for="urutan">Urutan *                </label>                <input type="number" name="urutan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['urutan'];?>
" size="100" min="1" maxlength="20" width="50" />              </div>            </div>            <br/>            <div class="form-group">              <label for="admin_name">Status *               </label>              <select  class="form-control" name="status" style="width:200px;">                <option value="active" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='active') {?>selected="selected"<?php }?>>Aktif                </option>                <option value="nonactive" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='nonactive') {?>selected="selected"<?php }?>>Tidak Aktif                </option>              </select>            </div>            <div class="form-group">              <label for="user_name_lama">Jumlah Pengikut *              </label>              <input type="text" name="pengikut" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pengikut'];?>
" size="100" maxlength="255"  style="width:150px;" />            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
