<?php /* Smarty version Smarty-3.1.17, created on 2016-10-02 09:16:02
         compiled from "application/views/private/agenda/add.html" */ ?>
<?php /*%%SmartyHeaderCode:115140867657f108927b3dc1-53492940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e89386376b763517f95979a0d0692435db541ff2' => 
    array (
      0 => 'application/views/private/agenda/add.html',
      1 => 1475215417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115140867657f108927b3dc1-53492940',
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
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57f1089290f725_65615927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f1089290f725_65615927')) {function content_57f1089290f725_65615927($_smarty_tpl) {?>                <section class="content-header">

                    <h1>

                      Agenda

                        <small>panel</small>

                    </h1>

                    <ol class="breadcrumb">

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
"><i class="fa fa-home"></i> Home</a></li>

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"><i class="fa "></i> Agenda</a></li>

                        <li class="active">Tambah Data</li>

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

                                        <i class="fa fa-ban"></i>

                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                        <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
.

                                    </div>

                                 <?php }?>

                                 <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>

                                 <div class="alert alert-success alert-dismissable">

                                        <i class="fa fa-check"></i>

                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

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

                                      <li class="active"><a href="#tab_1" data-toggle="tab">Indonesia</a></li>

                                      <li><a href="#tab_2" data-toggle="tab">English</a></li>

                                     

                                    </ul>

                                <!-- form start -->

                              <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">

                               <div class="tab-content">

                                 <div class="tab-pane active" id="tab_1">

                                   <div class="box-body">

                                       <div class="form-group">

                                         
                                          
                                             <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>

                                           <input type="hidden" name="id_asosiasi" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
"> 

                                             <?php } ?>

                                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['result']->value['nama_asosiasi'];?>
" readonly="readonly">

                                          

                                           

                                        </div>

                                         <div class="form-group">

                                            <label for="user_name_lama">Judul Kegiatan * </label>

                                            <input type="text" name="judul_agenda" id="judul_agenda" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul_agenda'];?>
" class="form-control" size="50" maxlength="255" />

                                        </div>

                                        <div class="form-group">

                                            <label for="user_name_lama">Tanggal Mulai *</label>

                                            <input type="text" name="tanggal_mulai" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal_mulai'];?>
" class="tanggal form-control" size="10" maxlength="10" style="width:150px;" />

                                        </div>

                                       <div class="form-group">

                                            <label for="user_name_lama">Tanggal Selesai *</label>

                                            <input type="text" name="tanggal_selesai" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal_selesai'];?>
" class="tanggal form-control" size="10" maxlength="10" style="width:150px;" />

                                        </div>

                                         <div class="form-group">

                                            <label for="user_name_lama">Lokasi </label>

                                            <input type="text" name="lokasi" id="lokasi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['lokasi'];?>
" class="form-control" size="50" maxlength="255" />

                                        </div>

                                        <div class="form-group">

                                            <label for="user_name_lama">Keterangan</label>

                                           <textarea name="keterangan" cols="72" rows="10"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</textarea>

                                        </div>

                                         <div class="form-group">

                                            <label for="user_name_lama">File Gambar <i>(Maks 5 Mb)</i></label>

                                           <span>

                                                    <input type="file" accept="image/*" onchange="loadFile(event)" 

                                                            style="visibility:hidden; width: 1px;" 

                                                            id='foto' name='image_agenda'  

                                                            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 

                                                    <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 

                                                    &nbsp;

                                                    <span  class="badge badge-important" ></span>

                                                </span>

                                        </div>

                                        <center><img id="output" style="height:200px; margin-top:10px;"/></center>

                                        



                                        <div class="form-group">

                                            <label for="user_name_lama">File Lampiran <i>(Maks 10 Mb)</i></label>

                                            <input  type="file" 

                                                            style="visibility:hidden; width: 1px;" 

                                                            id='foto' name='file'  

                                                            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 

                                                    <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 

                                                    &nbsp;

                                                    <span  class="badge badge-important" ></span>

                                        </div>

                                      

                                    </div><!-- /.box-body -->



                                    </div><!-- /.tabs pane 1-->



                                    <!-- tab 2-->

                                     <div class="tab-pane" id="tab_2">

                                   <div class="box-body">

                                         

                                       <div class="form-group">

                                            <label for="user_name_lama">Judul Agenda <i>(English)</i> *  </label>

                                            <input type="text" name="judul_english" id="judul_agenda" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul_english'];?>
" class="form-control" size="50" maxlength="255" />

                                        </div>

                                      

                                      

                                        <div class="form-group">

                                            <label for="user_name_lama">Keterangan <i>(English)</i> *</label>

                                           <textarea name="keterangan_english" cols="72" rows="10" class="textarea"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_english'];?>
</textarea>

                                        </div>

                                    </div><!-- /.box-body -->

                                        <div class="box-footer">

                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Simpan</button>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url_list']->value;?>
"  class="btn btn-primary"><i class="fa fa-close"></i>  Batal</a>

                                    </div>

                                    </div><!-- /.tabs pane 2-->

                                    </div><!-- /.tabs content-->

                                    </form>

                                    </div><!-- /.tabs customs-->

                                </form>

                            </div><!-- /.box -->

                        

                        </div><!-- /.col -->

                        

                        

                    </div><!-- /.row -->

                    

 </section><!-- /.content -->



 

    <script type="text/javascript">

      var loadFile = function(event) {

    var output = document.getElementById('output');

    output.src = URL.createObjectURL(event.target.files[0]);

  };

    </script>

 

<?php }} ?>
