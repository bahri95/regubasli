<?php /* Smarty version Smarty-3.1.17, created on 2016-09-30 07:05:12
         compiled from "application/views/web/registrasi/form.html" */ ?>
<?php /*%%SmartyHeaderCode:69926113057ee46e8d56bb9-76324311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab292933b237e65c3ac67d1781cd13cb6823cb1' => 
    array (
      0 => 'application/views/web/registrasi/form.html',
      1 => 1473324248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69926113057ee46e8d56bb9-76324311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_daftar' => 0,
    'listasosiasi' => 0,
    'result' => 0,
    'url_kota' => 0,
    'propinsi' => 0,
    'result_propinsi' => 0,
    'data' => 0,
    'data_kota' => 0,
    'url_captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ee46e8e03ec6_08044288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee46e8e03ec6_08044288')) {function content_57ee46e8e03ec6_08044288($_smarty_tpl) {?>
<div class="b-desc-section-container">
       
        <section class="container">
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
            <div class="col-xs-12 col-sm-6">
              <div class="b-form-row f-primary-l f-title-big c-secondary">Registrasi Anggota</div>
             
              
              <hr class="b-hr" />
                    <div class="row">
                       
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url_daftar']->value;?>
" id="form-registrasi" name="form-registrasi" method="post" enctype="multipart/form-data">

                            <div class="col-md-6">
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="name">Nama Lengkap/ Nama Organisasi *</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="nama" name="nama" value="" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="pekerjaan">Pekerjaan </label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="pekerjaan" name="pekerjaan" value="" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="website">Asosiasi yang dipilih *</label>
                                    <div class="b-form-vertical__input">
                                       <select name="id_asosiasi" class="form-control">
                                             <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listasosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
                                             <option value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_asosiasi'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_asosiasi'];?>
</option>
                                             <?php } ?>
                                       </select>
                                    </div>
                                </div>

                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Alamat Email *</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="email" name="email"  value="" class="form-control" />
                                    </div>
                                </div>
                                 <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Username *</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="username" name="username"  value="" class="form-control" />
                                    </div>
                                </div>
                                 <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Kata Kunci *</label>
                                    <div class="b-form-vertical__input">
                                        <input type="password" id="password" name="password"  value="" class="form-control" />
                                    </div>
                                </div>
                                 <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Ulangi Kata Kunci *</label>
                                    <div class="b-form-vertical__input">
                                        <input type="password" id="u_password" name="u_password"  value="" class="form-control" />
                                    </div>
                                </div>
                                 <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Perusahaan </label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="perusahaan" name="perusahaan" value="" class="form-control" />
                                    </div>
                                </div>
                                 <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Alamat</label>
                                    <div class="b-form-vertical__input">
                                        <textarea name="alamat" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                 <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Alamat Web </label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="alamat_web" name="web"  value="" class="form-control" />
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-6">

                                       <div class="form-group">
                                            <label for="id_propinsi">Provinsi * </label>
                                           <select name="id_propinsi" id="id_propinsi"  onchange="javascript:LoadKota('<?php echo $_smarty_tpl->tpl_vars['url_kota']->value;?>
/'+this.value);" class="selectpicker" data-live-search="true" data-width="100%">
                                            <option value="">---Pilih Provinsi---</option>
                                            <?php  $_smarty_tpl->tpl_vars['result_propinsi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result_propinsi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['propinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_propinsi']->key => $_smarty_tpl->tpl_vars['result_propinsi']->value) {
$_smarty_tpl->tpl_vars['result_propinsi']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['result_propinsi']->value['id_propinsi'];?>
" <?php if ($_smarty_tpl->tpl_vars['result_propinsi']->value['id_propinsi']==$_smarty_tpl->tpl_vars['data']->value['id_propinsi']) {?>selected="selected"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['result_propinsi']->value['nama_propinsi'];?>
</option>
                                            <?php } ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_propinsi">Kota * </label>
                                        <div id="kota_area"> <select name="id_kota" id="id_kota" class="selectpicker" data-live-search="true" data-width="100%">
                                        <option value="">----Pilih Kota----</option>
                                      <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_kota']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_kota'];?>
" <?php if ($_smarty_tpl->tpl_vars['result']->value['id_kota']==$_smarty_tpl->tpl_vars['data']->value['id_kota']) {?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['result']->value['nama_kota'];?>
</option>
                                      <?php } ?>
                                      </select></div>
                                        </div>


                                 <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Kode Pos</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="kode_pos" name="kode_pos"  value="" class="form-control" />
                                    </div>
                                </div>
                                
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Telepon *</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="telepon" name="telepon"  value="" class="form-control" />
                                    </div>
                                </div>
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Fax </label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="fax" name="fax"  value="" class="form-control" />
                                    </div>
                                </div>
                               
                                <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">No KTP</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="no_ktp" name="no_ktp"  value="" class="form-control" />
                                    </div>
                                </div>
                                 <div class="b-form-row">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['url_captcha']->value;?>
" id="image_captcha" name="captcha" align="absmiddle" />
                                    
                                </div>
                                 <div class="b-form-row">
                                    <label class="b-form-vertical__label" for="title">Kode Validasi *</label>
                                    <div class="b-form-vertical__input">
                                        <input type="text" id="user_key" name="user_key"  value="" class="form-control" />
                                    </div>
                                </div>
                                <br/>
                                
                                
                            </div>
                   
                        
                    </div> 
                   
                            
                        
                </div><!-- COL XS 12 -->

            <div class="col-xs-12 col-sm-6"> <!-- upload foto -->
                <div class="b-form-row f-primary-l f-title-big c-secondary">Upload Foto</div>
             
                    
                      <hr class="b-hr" />
                           
                        <div class="box-body">
                            <div class="form-group">
                                <label for="user_name_lama">Foto User </label>
                                    <br />
                                    <img id="output" style="height:200px; margin-top:20px;">
                                    </div>
                                        <div class="form-group">
                                           <label>Pilih File Foto * </label>
                                                <span>
                                                    <input  type="file"  accept="image/*" onchange="loadFile(event)" 
                                                            style="visibility:hidden; width: 1px;" 
                                                            id='foto' name='image'  
                                                            onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 
                                                    <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 
                                                    &nbsp;
                                                    <span  class="badge badge-important" ></span>
                                                </span>
                                        </div>
                            </div>
                             
                            <div class="b-form-row">
                                <div class="col-md-6">
                                    <button type="submit" onclick="" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">Daftar</button>
                              </div>
                              </div>
                        </div><!-- /.box-body -->        
                          
                 
                </div> <!--upload foto -->

            </form>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
    // tiny
    function LoadKota(url_kota){
    $("#kota_area").load(url_kota);
  }

  
</script>

<script type="text/javascript">
  
  //foto
   var loadFile = function(event) {


    var output = document.getElementById('output');


    output.src = URL.createObjectURL(event.target.files[0]);


  };
</script>




    
    <?php }} ?>
