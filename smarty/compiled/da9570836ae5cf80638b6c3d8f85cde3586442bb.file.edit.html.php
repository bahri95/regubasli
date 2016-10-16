<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:12:08
         compiled from "application\views\private\bantas\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1840457ec94984795b9-92810324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da9570836ae5cf80638b6c3d8f85cde3586442bb' => 
    array (
      0 => 'application\\views\\private\\bantas\\edit.html',
      1 => 1473302624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840457ec94984795b9-92810324',
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
    'image_bantas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec94984db057_57954940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec94984db057_57954940')) {function content_57ec94984db057_57954940($_smarty_tpl) {?><section class="content-header">
  <h1>
    Banner Atas
    <small>panel
    </small>
  </h1>
  <ol class="breadcrumb">
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">
        <i class="fa fa-home">
        </i> Home
      </a>
    </li>
    <li>
      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">
        <i class="fa ">
        </i> Banner Atas
      </a>
    </li>
    <li class="active">Update Data
    </li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- notification template -->
    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>
    <div class="col-md-12">
      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>
      <div class="alert alert-danger alert-dismissable">
        <i class="fa fa-ban">
        </i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.
      </div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>
      <div class="alert alert-success alert-dismissable">
        <i class="fa fa-check">
        </i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.
      </div>
      <?php }?>
    </div>
    <?php }?>
    <div class="col-md-9">
      <!-- form update email-->
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Update Banner Atas
          </h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_kontak" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_bantas'];?>
" />
          <div class="box-body">
            <div class="form-group">
              <label>Pilih File Gambar (1351x154) * 
              </label>
              <div style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['image_bantas']->value;?>

              </div>
              <br />
              <span>
                <input type="file" accept="image/*" onchange="loadFile(event)" 
                       style="visibility:hidden; width: 1px;" 
                       id='foto' name='bantas'  
                       onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 
                <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 
                &nbsp;
                <span  class="badge badge-important" >
                </span>
              </span>
            </div>
            <center>
              <img id="output" style="width:50%; margin-top:10px;"/>
            </center>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-save">
              </i>  Simpan
            </button>
          </div>
        </form>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<script type="text/javascript">
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

<?php }} ?>
