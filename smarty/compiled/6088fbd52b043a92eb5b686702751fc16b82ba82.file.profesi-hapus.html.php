<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 11:40:19
         compiled from "application\views\private\profesi\profesi-hapus.html" */ ?>
<?php /*%%SmartyHeaderCode:2014758146e53369700-53087812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6088fbd52b043a92eb5b686702751fc16b82ba82' => 
    array (
      0 => 'application\\views\\private\\profesi\\profesi-hapus.html',
      1 => 1477734017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2014758146e53369700-53087812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58146e533cf025_37267325',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58146e533cf025_37267325')) {function content_58146e533cf025_37267325($_smarty_tpl) {?><section class="content-header">  <h1>    Profesi  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Profesi      </a>    </li>    <li class="active">Hapus Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-6">      <!-- form update email-->      <div class="box box-success">        <div class="box-header">          <h3 class="box-title">Hapus Profesi          </h3>        </div>        <!-- /.box-header -->        <!-- form start -->        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post">          <input type="hidden" name="id_profesi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_profesi'];?>
" />          <div class="box-body">            <div class="form-group">              <label for="user_name_lama">Anda yakin akan menghapus data ini ?              </label>            </div>            <div class="form-group">              <label for="user_name_lama">ID Profesi : <?php echo $_smarty_tpl->tpl_vars['data']->value['id_profesi'];?>
              </label>            </div>            <div class="form-group">              <label for="user_name_lama">Nama Profesi : <?php echo $_smarty_tpl->tpl_vars['data']->value['nama_profesi'];?>
              </label>            </div>                     </div>          <!-- /.box-body -->          <div class="box-footer">            <button type="submit" class="btn btn-danger">              <i class="fa fa-trash">              </i>  Hapus            </button>            <button type="button" onclick="javascript:document.location='<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
';"  class="btn btn-primary">              <i class="fa fa-close">              </i>  Batal              </a>          </div>        </form>      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
