<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 07:09:59
         compiled from "application/views/web/aspirasi/aspirasi.html" */ ?>
<?php /*%%SmartyHeaderCode:102715088657ecf687017073-74677148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df9deaed4be5c7345f0bcf234b98ab6f3074e02b' => 
    array (
      0 => 'application/views/web/aspirasi/aspirasi.html',
      1 => 1473324242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102715088657ecf687017073-74677148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_modul' => 0,
    'label' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process_aspirasi' => 0,
    'data' => 0,
    'listasosiasi' => 0,
    'result' => 0,
    'url_captcha' => 0,
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ecf68711c316_88710624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecf68711c316_88710624')) {function content_57ecf68711c316_88710624($_smarty_tpl) {?><div class="b-desc-section-container">  <section class="container b-welcome-box">    <div class="row">      <div class="col-md-offset-2 col-md-8">        <h1 class="is-global-title f-center"><?php echo $_smarty_tpl->tpl_vars['page_modul']->value;?>
        </h1>        <p class="f-center"><?php echo $_smarty_tpl->tpl_vars['label']->value['aspirasi'];?>
        </p>      </div>    </div>  </section>  <section class="container">    <div class="row">      <div class="col-sm-6 b-contact-form-box">        <h3 class="f-primary-b b-title-description f-title-description">          <?php echo $_smarty_tpl->tpl_vars['label']->value['pesan'];?>
        </h3>        <div class="row">          <!-- notification template -->          <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>          <div class="col-md-12">            <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>            <div class="alert alert-danger alert-dismissable">              <i class="fa fa-ban">              </i>              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;              </button>              <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.            </div>            <?php }?>            <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>            <div class="alert alert-success alert-dismissable">              <i class="fa fa-check">              </i>              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;              </button>              <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.            </div>            <?php }?>          </div>          <?php }?>          <form action="<?php echo $_smarty_tpl->tpl_vars['url_process_aspirasi']->value;?>
" id="form-kontak" name="form-kontak" method="post"                enctype="multipart/form-data">            <div class="col-md-6">              <div class="b-form-row">                <label class="b-form-vertical__label" for="name"><?php echo $_smarty_tpl->tpl_vars['label']->value['nama'];?>
 *                </label>                <div class="b-form-vertical__input">                  <input type="text" id="nama_pengirim" name="nama_pengirim" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" class="form-control" />                </div>              </div>              <div class="b-form-row">                <label class="b-form-vertical__label" for="name"><?php echo $_smarty_tpl->tpl_vars['label']->value['pekerjaan'];?>
  *                </label>                <div class="b-form-vertical__input">                  <input type="text" id="pekerjaan" name="pekerjaan" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['perkejaan'];?>
" class="form-control" />                </div>              </div>              <div class="b-form-row">                <label class="b-form-vertical__label" for="title"><?php echo $_smarty_tpl->tpl_vars['label']->value['objek'];?>
 *                </label>                <div class="b-form-vertical__input">                  <select name="id_asosiasi" class="form-control" >                     <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listasosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>                    <option value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_asosiasi'];?>
                    </option>                    <?php } ?>                  </select>                </div>              </div>              <div class="b-form-row">                <label class="b-form-vertical__label" for="email">Email *                </label>                <div class="b-form-vertical__input">                  <input type="text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" class="form-control" />                </div>              </div>              <div class="form-group">                <label for="tanggal"><?php echo $_smarty_tpl->tpl_vars['label']->value['tanggal'];?>
 *                </label>                <input type="date" name="tanggal" class="form-control">              </div>              <div class="form-group">                <label for="user_name_lama"><?php echo $_smarty_tpl->tpl_vars['label']->value['foto'];?>
                </label>                <span>                                                    <input  type="file"  accept="image/*" onchange="loadFile(event)"                                                             style="visibility:hidden; width: 1px;"                                                             id='foto' name='foto'                                                              onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  />                                                     <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/>                                                     &nbsp;                                                    <span  class="badge badge-important" ></span>                                                </span>              </div>              <img id="output" style="height:200px; margin-top:20px;">            </div>            <div class="col-md-6">              <div class="b-form-row">                <label class="b-form-vertical__label" for="name"><?php echo $_smarty_tpl->tpl_vars['label']->value['judul'];?>
 *                </label>                <div class="b-form-vertical__input">                  <input type="text" id="judul" name="judul" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama'];?>
" class="form-control" />                </div>              </div>              <div class="b-form-row b-form--contact-size">                <label class="b-form-vertical__label"><?php echo $_smarty_tpl->tpl_vars['label']->value['isi_pesan'];?>
 *                </label>                <textarea class="form-control" name="isi_aspirasi" maxlength="150" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['isi_pesan'];?>
                </textarea>              </div>              <div class="b-form-row">                <img src="<?php echo $_smarty_tpl->tpl_vars['url_captcha']->value;?>
" id="image_captcha" align="absmiddle" />                <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
doc/refresh.jpg" id="refresh" style="max-width:25px;margin-left:20px;" />              </div>              <div class="b-form-row">                <label class="b-form-vertical__label" for="title"><?php echo $_smarty_tpl->tpl_vars['label']->value['validasi'];?>
 *                </label>                <div class="b-form-vertical__input">                  <input type="text" id="kode_validasi" name="kode_validasi"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kode_validasi'];?>
" class="form-control" />                </div>              </div>              <div class="b-form-row">                <button type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100"><?php echo $_smarty_tpl->tpl_vars['label']->value['kirim_pesan'];?>
                </button>              </div>            </div>          </form>          <input type="hidden" name="url_captcha_refresh" id="url_captcha_refresh" value="<?php echo $_smarty_tpl->tpl_vars['url_captcha']->value;?>
" />        </div>      </div>      <div class="col-xs-12 col-sm-6">         <!-- upload foto -->        <div class="b-form-row f-primary-l f-title-big c-secondary col-xs-offset-1">          <b><?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk'];?>
          </b>        </div>        <div class="col-md-12">            <div class="b-tagline-box">            <div class="f-tagline_description">              <ul class="b-list-markers f-list-markers">                <li>                  <i class="fa fa-hand-o-right b-list-markers__ico f-list-markers__ico">                  </i><?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk1'];?>
                </li>                <li>                  <i class="fa fa-hand-o-right b-list-markers__ico f-list-markers__ico">                  </i><?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk2'];?>
                  <br/>                  &nbsp;&nbsp;&nbsp;&nbsp;- <?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk3'];?>
                  <br/>                  &nbsp;&nbsp;&nbsp;&nbsp;- <?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk4'];?>
                </li>                <li>                  <i class="fa fa-hand-o-right b-list-markers__ico f-list-markers__ico">                  </i><?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk5'];?>
                </li>                <li>                  <i class="fa fa-hand-o-right b-list-markers__ico f-list-markers__ico">                  </i><?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk6'];?>
                </li>                <li>                  <i class="fa fa-hand-o-right b-list-markers__ico f-list-markers__ico">                  </i><?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk7'];?>
                </li>                <li>                  <i class="fa fa-hand-o-right b-list-markers__ico f-list-markers__ico">                  </i><?php echo $_smarty_tpl->tpl_vars['label']->value['petunjuk8'];?>
                </li>              </ul>            </div>          </div>        </div>      </div>       <!--upload foto -->    </div>  </section></div><script type="text/javascript">    //foto   var loadFile = function(event) {    var output = document.getElementById('output');    output.src = URL.createObjectURL(event.target.files[0]);  };</script><?php }} ?>
