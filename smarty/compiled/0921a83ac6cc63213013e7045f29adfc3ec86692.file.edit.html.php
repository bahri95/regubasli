<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 02:14:25
         compiled from "application\views\private\video\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2536157ebf602703229-37134465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0921a83ac6cc63213013e7045f29adfc3ec86692' => 
    array (
      0 => 'application\\views\\private\\video\\edit.html',
      1 => 1475108064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2536157ebf602703229-37134465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebf602960a35_61743320',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'id_video' => 0,
    'url_upload' => 0,
    'url_video' => 0,
    'data' => 0,
    'tipe_video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebf602960a35_61743320')) {function content_57ebf602960a35_61743320($_smarty_tpl) {?><script type="text/javascript">  function loadVideo(url_load){    var id_vid = $('#id_video').val();    var url_load =$('#vid_url').val();    jQuery('#video-container').html('');    jQuery('#video-container').load(url_load + '/' + id_vid);  }</script><style>  .upload-ok{    color:#009900;    font-size:11px;    font-weight:bold;  }  .upload-error{    color:#FF0000;    font-size:11px;    font-weight:bold;  }</style><section class="content-header">  <h1>    Video    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-home">        </i> Home      </a>    </li>    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
">        <i class="fa ">        </i> Video      </a>    </li>    <li class="active">Tambah Data    </li>  </ol></section><!-- Main content --><section class="content">  <!-- Small boxes (Stat box) -->  <div class="row">    <!-- notification template -->    <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>    <div class="col-md-12">      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>      <div class="alert alert-danger alert-dismissable">        <i class="fa fa-ban">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>      <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>      <div class="alert alert-success alert-dismissable">        <i class="fa fa-check">        </i>        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;        </button>        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.      </div>      <?php }?>    </div>    <?php }?>    <div class="col-md-9">      <!-- form update email-->      <div class="box box-success">        <div class="nav-tabs-custom">          <ul class="nav nav-tabs">            <li class="active">              <a href="#tab_1" data-toggle="tab">Indonesia              </a>            </li>            <li>              <a href="#tab_2" data-toggle="tab">English              </a>            </li>           </ul>          <!-- form start -->          <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">            <div class="tab-content">              <div class="tab-pane active" id="tab_1">                <input type="hidden" name="id_video" id="id_video" value="<?php echo $_smarty_tpl->tpl_vars['id_video']->value;?>
" />                <input type="hidden" name="url-upload" id="url-upload" value="<?php echo $_smarty_tpl->tpl_vars['url_upload']->value;?>
" />                <input type="hidden" name="vid_url" id="vid_url" value="<?php echo $_smarty_tpl->tpl_vars['url_video']->value;?>
" />                <input type="hidden" name="tipe" id="tipe" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tipe'];?>
" />                <div class="box-body">                  <div class="form-group">                    <label for="user_name_lama">Judul Video *                    </label>                    <input type="text" name="judul_video" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul_video'];?>
" size="100" maxlength="255" />                  </div>                  <div class="form-group">                    <label for="tipe">Tipe                       <strong>                        <i><?php echo $_smarty_tpl->tpl_vars['tipe_video']->value;?>
                        </i>                      </strong>                    </label>                  </div>                  <div class="form-group">                    <label for="user_name_lama">Potongan Gambar ( Max 500Kb, Min. Width 400px )                    </label>                     <span>                      <input  type="file"                              style="visibility:hidden; width: 1px;"                              id='image_video' name='image_video'                               onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  />                       <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/>                       &nbsp;                      <span  class="badge badge-important" >                      </span>                    </span>                    <br />                      <br /> <?php echo $_smarty_tpl->tpl_vars['data']->value['video_image'];?>
                    <br />                  </div>                  <?php if ($_smarty_tpl->tpl_vars['data']->value['tipe']=='upload') {?>                  <div class="form-group">                    <label for="user_name_lama">Video                    </label>                     <div id="video-container"><?php echo $_smarty_tpl->tpl_vars['data']->value['video_file'];?>
                    </div>                    <br />                    <br />                    <input type="button" id="uploader_video" value="Upload Video" class="btn btn-succes"  name="uploader" class="edit-button" />                     <br />                    <span id="statusupload" style="font-size:14px;color:#3399CC;">                    </span>                    <br />                    <span>Click tombol diatas untuk mengupload video.                    </span>                  </div>                  <?php }?>                  <?php if ($_smarty_tpl->tpl_vars['data']->value['tipe']=='embed') {?>                  <div class="form-group">                    <label for="user_name_lama">Embed Script *                    </label>                     <textarea name="video_embed" class="form-control" cols="80" rows="5"><?php echo $_smarty_tpl->tpl_vars['data']->value['video_embed'];?>
                    </textarea>                  </div>                  <?php }?>                  <div class="form-group">                    <label for="user_name_lama">Keterangan                    </label>                    <textareastyle name="keterangan" class="form-control"  cols="72" rows="4" ><?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan'];?>
                    </textareastyle>                  </div>                  <div class="form-group">                    <label for="user_name_lama">Sumber Video                     </label>                    <input type="text" name="sumber" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sumber'];?>
" size="50" maxlength="50" />                  </div>                </div>                <!-- /.box-body -->              </div>              <!-- /.tab pane 1 -->              <!-- tab pane 2-->              <div class="tab-pane" id="tab_2">                <div class="box-body">                  <div class="form-group">                    <label for="user_name_lama">Judul Video (                      <i>English                      </i> ) *                    </label>                    <input type="text" name="judul_english" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul_english'];?>
" size="100" maxlength="255" />                  </div>                  <div class="form-group">                    <label for="user_name_lama">Keterangan (                      <i>English                      </i> )                    </label>                    <textarea name="keterangan_english" class="form-control" cols="72" rows="4" ><?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_english'];?>
                    </textarea>                  </div>                </div>                <!-- /.box-body -->                <div class="box-footer">                  <button type="submit" class="btn btn-primary">                    <i class="fa fa-save">                    </i>  Simpan                  </button>                  <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary">                    <i class="fa fa-close">                    </i>  Batal                  </a>                </div>              </div>              <!-- /.tab pane 2 -->            </div>            <!-- /.tab content -->          </form>        </div>        <!-- /.tab customs -->      </div>      <!-- /.box -->    </div>    <!-- /.col -->  </div>  <!-- /.row --></section><!-- /.content --><?php }} ?>
