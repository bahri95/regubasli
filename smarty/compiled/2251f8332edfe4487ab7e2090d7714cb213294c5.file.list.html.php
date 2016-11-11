<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 07:43:42
         compiled from "application\views\private\kecamatan\list.html" */ ?>
<?php /*%%SmartyHeaderCode:262835813ebcc9ae081-57775154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2251f8332edfe4487ab7e2090d7714cb213294c5' => 
    array (
      0 => 'application\\views\\private\\kecamatan\\list.html',
      1 => 1477719811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262835813ebcc9ae081-57775154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5813ebcd03c256_96858152',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_search' => 0,
    'kota' => 0,
    'result_kota' => 0,
    'kota_selected' => 0,
    'kecamatan' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_edit2' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813ebcd03c256_96858152')) {function content_5813ebcd03c256_96858152($_smarty_tpl) {?><section class="content-header">  <h1>    Kecamatan    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li class="active">Kecamatan    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-12">      <div class="box">        <div class="box-header">          <h3 class="box-title">Data Kecamatan          </h3>          <div class="box-tools">            <div class="btn-group pull-right">              <a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
" title="Tambah Data" class="btn bg-olive btn-flat">                <i class='fa fa-plus'>                </i> Tambah Data              </a>            </div>          </div>        </div>        <!-- /.box-header -->        <div class="box-header">          <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_search']->value;?>
" >            <div class="box-body">              <div class="form-group">                <label for="user_name_lama">Kota/Kabupaten                 </label>                <div class="input-group">                  <span class="input-group-addon">                    <i class="fa fa-search">                    </i>                  </span>                  <select name="id_propinsi" class="form-control" onchange="javascript:document.location='<?php echo $_smarty_tpl->tpl_vars['url_search']->value;?>
/' + this.value">                    <option value="">-Pilih Kota/Kabupaten-                    </option>                    <?php  $_smarty_tpl->tpl_vars['result_kota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result_kota']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_kota']->key => $_smarty_tpl->tpl_vars['result_kota']->value) {
$_smarty_tpl->tpl_vars['result_kota']->_loop = true;
?>                    <option value="<?php echo $_smarty_tpl->tpl_vars['result_kota']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['result_kota']->value['id']==$_smarty_tpl->tpl_vars['kota_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_kota']->value['nama'];?>
                    </option>                    <?php } ?>                  </select>                </div>              </div>            </div>            <!-- /.box-body -->          </form>        </div>        <!-- /.box-header -->        <div class="box-body table-responsive">          <table id="table_datagrid" class="table table-bordered table-striped">            <thead>              <tr>                <th width="10%" style="text-align:center;">ID Kota                </th>                <th width="35%">Nama Kota/Kabupaten                </th>                <th width="35%">Nama Kecamatan                </th>                <th>                </th>              </tr>            </thead>            <tbody>              <?php if ($_smarty_tpl->tpl_vars['kota']->value!='') {?>              <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kecamatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>              <tr>                <td align="center"><?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_kota'];?>
                </td>                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['nama'];?>
                </td>                <td align="center">                  <div class="btn-group">                    <a                        <?php if ($_smarty_tpl->tpl_vars['kota_selected']->value!='') {?>                       href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
"                       <?php } else { ?>                       href="<?php echo $_smarty_tpl->tpl_vars['url_edit2']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_kabupaten'];?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
"                       <?php }?>                       title="Edit" class="btn btn-success btn-flat">                      <i class='fa fa-pencil'>                      </i>                    </a>&nbsp;                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_delete']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" title="Hapus" class="btn btn-danger btn-flat" id="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" onclick="return konfirmasi_delete();">                      <i class='fa fa-trash'>                      </i>                    </a>                  </div>                 </td>              </tr>              <?php } ?>              <?php }?>            </tbody>            <tfoot>              <tr>                <th width="10%" style="text-align:center;">ID Kota                </th>                <th width="35%">Nama Provinsi                </th>                <th width="35%">Nama Kota                </th>                <th>                </th>              </tr>            </tfoot>          </table>        </div>        <!-- /.box-body -->      </div>      <!-- /.box -->    </div>  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
