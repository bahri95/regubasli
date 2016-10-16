<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 02:41:12
         compiled from "application/views/private/harga/cpo_domestik_list.html" */ ?>
<?php /*%%SmartyHeaderCode:39258057957ea1488e605e9-50700448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55eee3c107afbc136af5604f1b1a8296c15b3762' => 
    array (
      0 => 'application/views/private/harga/cpo_domestik_list.html',
      1 => 1474855382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39258057957ea1488e605e9-50700448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_add' => 0,
    'data_cpodomestik' => 0,
    'result' => 0,
    'no_cpo' => 0,
    'url_edit' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea1488e91d70_34594592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea1488e91d70_34594592')) {function content_57ea1488e91d70_34594592($_smarty_tpl) {?>                     <div class="box">                                <div class="box-header">                                     <h3 class="box-title">Data Harga CPO Domestik (KPB dan Astra)</h3>                                     <div class="box-tools">                                      <div class="btn-group pull-right"><a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
/2" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a></div>                                    </div>                                </div>                                <div class="box-body table-responsive">                                        <table id="table_datagrid_cpo" class="table table-bordered table-striped">                                            <thead>                                                <tr>                                               <th width="5%" id="cekAll"><input type="checkbox" class="checked-all" name="checked-all"  id="checked-all" class="form-control"></th>                                                <th width="5%">No.</th>                                                <th width="15%">Kategori Harga</th>                                                <th width="10%" align="center">Tahun</th>                                                <th width="10%" align="center">Bulan</th>                                                <th width="20%" align="center">Harga Rupiah</th>                                                <th width="20%" align="center">Harga Dolar</th>                                                <th width="7%"></th>                                                </tr>                                            </thead>                                            <tbody>                                              <?php if ($_smarty_tpl->tpl_vars['data_cpodomestik']->value!='') {?>                                              <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_cpodomestik']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>                                            <tr>                                                <td align="center"><input type=checkbox name="id_harga[]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" class="checkbox" /></td>                                                <td><?php echo $_smarty_tpl->tpl_vars['no_cpo']->value++;?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['katharga'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['tahun'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['lengkap'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['harga_rupiah'];?>
</td>                                               <td><?php echo $_smarty_tpl->tpl_vars['result']->value['harga_dolar'];?>
</td>                                                <td align="center">                                                <div class="btn-group-vertical"><a href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" title="Edit" class="btn btn-success btn-flat"><i class='fa fa-pencil'></i></a>                                              </div>                                                 </td>                                            </tr>                                            <?php } ?>                                            <?php }?>                                            </tbody>                                            <tfoot>                                        </tfoot>                                    </table>                                  </div>                                     <div class="box-footer clearfix">										<input type="submit" name="hapus" value="hapus" class="btn btn-danger"/>                                       <ul class="pagination pagination-sm no-margin pull-right"> <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
<?php }?></ul>                                    </div>                                    </div><!--end box--><?php }} ?>
