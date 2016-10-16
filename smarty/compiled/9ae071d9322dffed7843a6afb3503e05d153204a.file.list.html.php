<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 04:50:54
         compiled from "application/views/private/harga/list.html" */ ?>
<?php /*%%SmartyHeaderCode:202182704457ea1488583221-50650753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ae071d9322dffed7843a6afb3503e05d153204a' => 
    array (
      0 => 'application/views/private/harga/list.html',
      1 => 1474966226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202182704457ea1488583221-50650753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea1488de5e01_99154869',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 1,
    'view_tab' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea1488de5e01_99154869')) {function content_57ea1488de5e01_99154869($_smarty_tpl) {?><script type="text/javascript">  function konfirmasi_delete_data(){    tanya = confirm('Apakah anda yakin akan menghapus data ini!');    if(tanya){      return true;    }else{      return false;    }  }</script>                <section class="content-header">                    <h1>                       Harga                        <small>panel</small>                    </h1>                    <ol class="breadcrumb">                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
"><i class="fa fa-home"></i> Home</a></li>                        <li class="active">Harga</li>                    </ol>                </section>                <!-- Main content -->                <section class="content">        <!-- Small boxes (Stat box) -->                    <div class="row">                     <!-- notification template -->                        <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>                        <div class="col-md-12">                            <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>                            <div class="alert alert-danger alert-dismissable">                                        <i class="fa fa-ban"></i>                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                                        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.                                    </div>                                 <?php }?>                                 <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>                                 <div class="alert alert-success alert-dismissable">                                        <i class="fa fa-check"></i>                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>                                         <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.                                    </div>                                 <?php }?>                         </div>                        <?php }?>                        <div class="col-md-12">                        <div class="nav-tabs-custom">                                    <ul class="nav nav-tabs">                                      <li class="active"><a href="#tab_1" data-toggle="tab">Data</a></li>                                      <li><a href="#tab_2" data-toggle="tab">Grafik dan Tabel</a></li>                                    </ul>                        <div class="tab-content">                        <div class="tab-pane active" id="tab_1">                          <div class="box">                                <div class="box-header">                                    <h3 class="box-title">Tabel Harga</h3>                                                                     </div>                                                                   <form action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">                                    <div class="box-body table-responsive">                                       <div class="nav-tabs-custom">										<ul class="nav nav-tabs">											<li class="active"><a href="#tab_4_data" data-toggle="tab">Tandan Buah SEGAR (TBS) </a></li>                                            <li><a href="#tab_6_data" data-toggle="tab">CPO Domestik (KPB dan Astra)</a></li>                                            <li><a href="#tab_5_data" data-toggle="tab">Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam) </a></li>                                        </ul>										<div class="tab-content">											<input type="hidden" name="view_tab" id="view_tab" value="<?php echo $_smarty_tpl->tpl_vars['view_tab']->value;?>
" />											<div class="tab-pane active" id="tab_4_data">											   <?php echo $_smarty_tpl->getSubTemplate ("private/harga/domestik_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
											</div><!--tab 4-->											<div class="tab-pane" id="tab_6_data">												<?php echo $_smarty_tpl->getSubTemplate ("private/harga/cpo_domestik_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
											</div><!--tab 6-->											<div class="tab-pane" id="tab_5_data">												<?php echo $_smarty_tpl->getSubTemplate ("private/harga/ekspor_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
											</div><!--tab 5-->										</div>                                    </div>                                    </div><!-- /.box-body -->                                    </form>                            </div><!-- /.box -->                            </div><!--nav-tabs-1-->                            <!-- tab 2-->                            <div class="tab-pane" id="tab_2">                             <?php echo $_smarty_tpl->getSubTemplate ("private/harga/grafik.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
                            </div><!--nav-tabs-2-->                            </div><!--nav-tabs-content-->                            </div><!--nav-tabs-custom-->                        </div><!-- /.col -->                    </div><!-- /.row -->                </section><!-- /.content -->                <?php }} ?>
