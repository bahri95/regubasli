<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 05:25:28
         compiled from "application\views\private\relawan\relawan-add.html" */ ?>
<?php /*%%SmartyHeaderCode:349358033854438611-30293135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c34af43c0f7c9c2b44c49bd5816fd2501d691eee' => 
    array (
      0 => 'application\\views\\private\\relawan\\relawan-add.html',
      1 => 1476674529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '349358033854438611-30293135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_580338544a5c37_89661081',
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
<?php if ($_valid && !is_callable('content_580338544a5c37_89661081')) {function content_580338544a5c37_89661081($_smarty_tpl) {?><section class="content-header">
  <h1>
   Profil Cagub-Cawagub
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
        </i>  Profil Cagub-Cawagub
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
      <!-- form add -->
      <div class="box box-success">
        <!-- Custom Tabs -->
      
      
          <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">
            <div class="tab-content">
              
                <div class="box-body">
                <div class="form-group">
                    <label for="judul">Nama Profil* &nbsp;&nbsp;
                    </label>
                    <input type="text" class="form-control" name="nama"  size="100" maxlength="255"  style="width: 50%;" />
                  </div>
                   <div class="form-group">
                    <label for="judul">Jabatan &nbsp;&nbsp;
                    </label>
                    <input type="text" class="form-control" name="jabatan"  size="100" maxlength="255" style="width: 50%;"/>
                  </div>

                  <div class="form-group">
                    <label for="content">Profil *
                    </label>
                    <textarea  name="content">
                    </textarea>
                  </div>

                   <div class="form-group">
                    <label for="content">Deskripsi *
                    </label>
                    <textarea  name="deskripsi">
                    </textarea>
                  </div>


                   <div class="form-group">
                    <label for="content">Pendidikan *
                    </label>
                    <textarea  name="pendidikan">
                    </textarea>
                  </div>


                   <div class="form-group">
                    <label for="content">Riwayat Jabatan *
                    </label>
                    <textarea  name="riwayat">
                    </textarea>
                  </div>


                   <div class="form-group">
                    <label for="content">Penghargaan *
                    </label>
                    <textarea  name="penghargaan">
                    </textarea>
                  </div>
                   <div class="form-group" style="width:10%">
                    <label for="order_num" style="float:left;">No Urut * &nbsp;&nbsp;
                    </label>
                    <input type="number" min="1" class="form-control" name="order_num" id="order_num" class="col-xs-3" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['order_num'];?>
" size="10" maxlength="10" />
                    <div style="clear:both">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="user_name_lama">Foto Profil
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
                    <img id="output" style="height:200px; margin-top:10px;"/>
                  </center>

                  
                
                <!-- /.box-body -->
              </div>
              <!-- /.tab pane 1 -->
      

           
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
                </form>
            </div>
      </div>
      <!-- /.tab customs -->
    </div>
    <!-- /.col -->
  </div>
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
