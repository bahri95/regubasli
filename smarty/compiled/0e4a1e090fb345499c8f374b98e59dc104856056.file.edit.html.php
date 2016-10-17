<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 07:29:44
         compiled from "application\views\private\informasi\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2131158045ca898af82-08500237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e4a1e090fb345499c8f374b98e59dc104856056' => 
    array (
      0 => 'application\\views\\private\\informasi\\edit.html',
      1 => 1476682179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2131158045ca898af82-08500237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58045ca8b6b772_37137762',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'image_informasi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58045ca8b6b772_37137762')) {function content_58045ca8b6b772_37137762($_smarty_tpl) {?><section class="content-header">
  <h1>
    Berita Cagub-Cawagub
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
        </i> Berita Cagub-Cawagub
      </a>
    </li>
    <li class="active">Edit Data
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
        
          <!-- form start -->
          <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">
     
              <div class="tab-pane active" id="tab_1">
                <div class="box-body">
                  <input type="hidden" name="id_informasi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_informasi'];?>
" />
                
                  <div class="form-group">
                    <label for="user_name_lama">Judul Berita * 
                    </label>
                    <input type="text" name="judul" id="judul" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
" class="form-control" size="50" maxlength="255" />
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Tanggal Berita *
                    </label>
                    <input type="text" name="tanggal" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal'];?>
" class="tanggal form-control" size="10" maxlength="10" style="width:150px;" />
                  </div>
                  <div class="form-group">
                    <label for="user_name_lama">Isi Berita
                    </label>
                    <textarea name="content" cols="72" rows="10"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

                    </textarea>
                  </div>
                  <div class="form-group">
                    <div style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['image_informasi']->value;?>

                    </div>
                    <br />
                    <label for="user_name_lama">File Gambar 
                      <i>(Maks 5 Mb)
                      </i>
                    </label>
                    <span>
                      <input type="file" accept="image/*" onchange="loadFile(event)" 
                             style="visibility:hidden; width: 1px;" 
                             id='foto' name='foto'  
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
                  <div class="form-group">
                    <label for="user_name_lama">Keterangan Gambar
                    </label>
                    <input type="text" name="keterangan_gambar" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan_gambar'];?>
" size="100" maxlength="200" class="form-control" />
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.tabs pane 1-->
              <!-- tab 2-->
            
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
              <!-- /.tabs pane 2-->
            </div>
            <!-- /.tabs content-->
          </form>
        </div>
        <!-- /.tabs customs-->
       <    </div>
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
