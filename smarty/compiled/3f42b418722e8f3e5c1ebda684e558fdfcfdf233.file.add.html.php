<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 02:58:22
         compiled from "application/views/private/harga/add.html" */ ?>
<?php /*%%SmartyHeaderCode:162153479057ea16fb02db77-94469335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f42b418722e8f3e5c1ebda684e558fdfcfdf233' => 
    array (
      0 => 'application/views/private/harga/add.html',
      1 => 1474959470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162153479057ea16fb02db77-94469335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea16fb3eb104_35257309',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'id_katharga' => 0,
    'subkatharga' => 0,
    'rs_subkatharga' => 0,
    'data' => 0,
    'bulan' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea16fb3eb104_35257309')) {function content_57ea16fb3eb104_35257309($_smarty_tpl) {?><section class="content-header">  <h1>    Harga    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Data Harga      </a>    </li>    <li class="active">Tambah Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Tambah Data Harga          </h3>        </div>              <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">			<input type="hidden" name="id_katharga" id="id_katharga" value="<?php echo $_smarty_tpl->tpl_vars['id_katharga']->value;?>
" />			          <div class="box-body">			  <?php if ($_smarty_tpl->tpl_vars['id_katharga']->value!='2') {?>			                            <div class="form-group">                                          <label for="id_sub_katharga"><?php if ($_smarty_tpl->tpl_vars['id_katharga']->value=='1') {?>Provinsi *<?php }?><?php if ($_smarty_tpl->tpl_vars['id_katharga']->value=='3') {?>Sub Kategori Harga *<?php }?> </label>                                          <div id="subkatharga"> <select name="id_sub_katharga" id="id_sub_katharga" class="form-control" style="width:300px;">                                            <option value="">-Pilih Sub Kategori Harga-</option>                                          <?php  $_smarty_tpl->tpl_vars['rs_subkatharga'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs_subkatharga']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subkatharga']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs_subkatharga']->key => $_smarty_tpl->tpl_vars['rs_subkatharga']->value) {
$_smarty_tpl->tpl_vars['rs_subkatharga']->_loop = true;
?>                                            <option value="<?php echo $_smarty_tpl->tpl_vars['rs_subkatharga']->value['id_sub_katharga'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs_subkatharga']->value['sub_katharga'];?>
</option>                                          <?php } ?>                                          </select>                                          </div>                                        </div>              <?php } else { ?>              <input type="hidden" name="id_sub_katharga" id="id_sub_katharga" value="0" />              <?php }?>            <div class="form-group">              <label for="user_name_lama">Tahun *              </label>              <input type="text" name="tahun" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tahun'];?>
" id="tahun" class="form-control" size="10" maxlength="10" style="width:150px;" />            </div>            <div class="form-group">              <label for="user_name_lama">Bulan *              </label>              <select name="id_bulan" class="form-control" style="width:200px;" >                 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bulan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>                <option value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_bulan'];?>
" <?php if ($_smarty_tpl->tpl_vars['rs']->value['id_bulan']==$_smarty_tpl->tpl_vars['data']->value['id_bulan']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['rs']->value['lengkap'];?>
                </option>                <?php } ?>              </select>            </div>            <div class="form-group">              <label for="user_name_lama">Harga (Rupiah) *              </label>              <input type="text"  id="rupiah" name="rupiah" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['rupiah'];?>
" class="form-control" size="10" maxlength="10" style="width:250px;" />            </div>                        <script>				//oninput="konversi()"               function konversi() {                var rupiah = document.getElementById("rupiah").value / 13350;                var dolar = rupiah;                var bulatkan = dolar.toFixed(2);                document.getElementById("dolar").value = bulatkan;              }            </script>                         <div class="form-group">              <label for="user_name_lama">Harga (Dolar) *              </label>              <input type="text" id="dolar" name="dolar" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dolar'];?>
" class="form-control" size="10" maxlength="10" style="width:250px;" />            </div>            <div class="form-group">              <label>Sumber              </label>              <input type="text" name="sumber" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sumber'];?>
" class="form-control">            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-primary">              <i class="fa fa-save">              </i>  Simpan            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><script type="text/javascript">    // tiny    function LoadSubKatharga(url_sub_katharga){    $("#subkatharga").load(url_sub_katharga);  }</script><?php }} ?>
