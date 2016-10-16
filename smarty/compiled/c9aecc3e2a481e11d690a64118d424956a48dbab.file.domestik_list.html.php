<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 05:01:36
         compiled from "application\views\private\harga\domestik_list.html" */ ?>
<?php /*%%SmartyHeaderCode:907857ec84108dd4f0-14206916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9aecc3e2a481e11d690a64118d424956a48dbab' => 
    array (
      0 => 'application\\views\\private\\harga\\domestik_list.html',
      1 => 1474833500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '907857ec84108dd4f0-14206916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_add' => 0,
    'data_domestik_input' => 0,
    'result' => 0,
    'no' => 0,
    'url_edit' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec841092f595_64274755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec841092f595_64274755')) {function content_57ec841092f595_64274755($_smarty_tpl) {?>                     <div class="box">                                <div class="box-header">                                     <h3 class="box-title">Data Harga Tandan Buah SEGAR (TBS)</h3>                                     <div class="box-tools">                                      <div class="btn-group pull-right"><a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
/1" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a></div>                                    </div>                                </div>                                <div class="box-body table-responsive">                                        <table id="table_datagrid" class="table table-bordered table-striped">                                            <thead>                                                <tr>                                               <th width="5%" id="cekAll"><input type="checkbox" class="checked-all" name="checked-all"  id="checked-all" class="form-control"></th>                                                <th width="5%">No.</th>                                                <th width="15%">Kategori Harga</th>                                                <th width="15%">Provinsi</th>                                                <th width="10%" align="center">Tahun</th>                                                <th width="10%" align="center">Bulan</th>                                                <th width="20%" align="center">Harga Rupiah</th>                                                <th width="20%" align="center">Harga Dolar</th>                                                <th width="7%"></th>                                                </tr>                                            </thead>                                            <tbody>                                              <?php if ($_smarty_tpl->tpl_vars['data_domestik_input']->value!='') {?>                                              <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_domestik_input']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>                                            <tr>                                                <td align="center"><input type=checkbox name="id_harga[]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" class="checkbox" /></td>                                                <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['katharga'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['sub_katharga'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['tahun'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['lengkap'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['harga_rupiah'];?>
</td>                                               <td><?php echo $_smarty_tpl->tpl_vars['result']->value['harga_dolar'];?>
</td>                                                <td align="center">                                                <div class="btn-group-vertical"><a href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" title="Edit" class="btn btn-success btn-flat"><i class='fa fa-pencil'></i></a>                                              </div>                                                 </td>                                            </tr>                                            <?php } ?>                                            <?php }?>                                            </tbody>                                            <tfoot>                                        </tfoot>                                    </table>                                  </div>                                     <div class="box-footer clearfix">										<input type="submit" name="hapus" value="hapus" class="btn btn-danger"/>                                       <ul class="pagination pagination-sm no-margin pull-right"> <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
<?php }?></ul>                                    </div>                                    </div><!--end box--><?php }} ?>
