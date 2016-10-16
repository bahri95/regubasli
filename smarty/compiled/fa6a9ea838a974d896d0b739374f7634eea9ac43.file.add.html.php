<?php /* Smarty version Smarty-3.1.17, created on 2016-09-30 06:34:11
         compiled from "application/views/private/video/add.html" */ ?>
<?php /*%%SmartyHeaderCode:123381265857ee03ca892ed1-95401760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa6a9ea838a974d896d0b739374f7634eea9ac43' => 
    array (
      0 => 'application/views/private/video/add.html',
      1 => 1475230169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123381265857ee03ca892ed1-95401760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ee03ca9872d7_20880550',
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
<?php if ($_valid && !is_callable('content_57ee03ca9872d7_20880550')) {function content_57ee03ca9872d7_20880550($_smarty_tpl) {?><section class="content-header">
  <h1>
    Video
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
        </i> Video
      </a>
    </li>
    <li class="active">Tambah Data
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
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#tab_1" data-toggle="tab">Indonesia
              </a>
            </li>
            <li>
              <a href="#tab_2" data-toggle="tab">English
              </a>
            </li>
          </ul>
          <!-- form start -->
          <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box-body">
                  <div class="form-group">
                    <label for="user_name_lama">Judul Video *
                    </label>
                    <input type="text" name="judul_video" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul_video'];?>
" size="100" maxlength="255" />
                  </div>
                  <div class="form-group">
                    <label for="admin_name">Tipe * 
                    </label>
                    <select name="tipe" class="form-control" >
                      <option value="upload">Video Upload
                      </option>
                      <option value="embed">Video Embed dari situs lain
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Potongan Gambar ( Max 500Kb, Min. Width 400px )
                    </label> 
                    <span>
                      <input  type="file" 
                             style="visibility:hidden; width: 1px;" 
                             id='image_video' name='image_video'  
                             onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 
                      <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 
                      &nbsp;
                      <span  class="badge badge-important" >
                      </span>
                    </span>
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Keterangan
                    </label>
                    <textarea name="keterangan" class="form-control" cols="72" rows="4" >
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Sumber Video 
                    </label>
                    <input type="text" name="sumber" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sumber'];?>
" size="50" maxlength="50" />
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.tab pane 1 -->
              <!-- tab pane 2-->
              <div class="tab-pane" id="tab_2">
                <div class="box-body">
                  <div class="form-group">
                    <label for="user_name_lama">Judul Video (
                      <i>English
                      </i> ) *
                    </label>
                    <input type="text" name="judul_english" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul_video'];?>
" size="100" maxlength="255" />
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Keterangan (
                      <i>English
                      </i> )
                    </label>
                    <textarea name="keterangan_english" class="form-control" cols="72" rows="4" ><?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan'];?>

                    </textarea>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save">
                    </i>  Simpan
                  </button>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">
                    <i class="fa fa-close">
                    </i>  Batal
                  </a>
                </div>
              </div>
              <!-- /.tab pane 2 -->
            </div>
            <!-- /.tab content -->
          </form>
        </div>
        <!-- /.tab customs -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
<?php }} ?>
