<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 05:27:04
         compiled from "application\views\private\profil\hapus.html" */ ?>
<?php /*%%SmartyHeaderCode:1002958044508ed3a85-05386547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71fbf0140e5ee9372abb0d236ac5fdbff93b9b2e' => 
    array (
      0 => 'application\\views\\private\\profil\\hapus.html',
      1 => 1473302632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1002958044508ed3a85-05386547',
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
  'unifunc' => 'content_58044508f410a5_54712957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58044508f410a5_54712957')) {function content_58044508f410a5_54712957($_smarty_tpl) {?><section class="content-header">  <h1>    Profil Instansi    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i>  Profil Instansi      </a>    </li>    <li class="active">Hapus Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form add -->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Update Data          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_info" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_info'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="judul">Judul * &nbsp;&nbsp;              </label>              <input type="text" name="judul" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
" size="100" maxlength="255" disabled="disabled" />            </div>            <div class="form-group" style="width:40%">              <label for="order_num" style="float:left;">No Urut * &nbsp;&nbsp;              </label>              <input type="text" name="order_num" id="order_num" class="col-xs-3" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['order_num'];?>
" size="20" maxlength="10" disabled="disabled" />              <div style="clear:both">              </div>            </div>            <div class="form-group">              <label for="content">Isi Profil              </label>              <textarea class="textarea" name="content"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
              </textarea>            </div>          </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-danger">              <i class="fa fa-trash">              </i>  Hapus            </button>            <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal            </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
