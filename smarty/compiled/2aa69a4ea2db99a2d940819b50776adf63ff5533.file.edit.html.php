<?php /* Smarty version Smarty-3.1.17, created on 2016-10-05 10:03:43
         compiled from "application\views\private\sponsor\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:730957f4b3041e21b7-26910605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2aa69a4ea2db99a2d940819b50776adf63ff5533' => 
    array (
      0 => 'application\\views\\private\\sponsor\\edit.html',
      1 => 1475654621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '730957f4b3041e21b7-26910605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57f4b3043a7411_21595869',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'image_sponsor_edit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4b3043a7411_21595869')) {function content_57f4b3043a7411_21595869($_smarty_tpl) {?><section class="content-header">

  <h1>

    Sponsorship

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

        </i> Data Sponsor

      </a>

    </li>

    <li class="active">Edit Data Sponsor

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

          <h3 class="box-title">Update Sponsor

          </h3>

        </div>

        <!-- /.box-header -->

        <!-- form start -->

        <form id="form" action="<?php echo $_smarty_tpl->tpl_vars['url_process']->value;?>
" method="post" enctype="multipart/form-data">

          <div class="box-body">

            <div class="form-group">

              <label for="user_name_lama">Nama Sponsor*

              </label>

              <input type="hidden" name="id_sponsor" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_sponsor'];?>
" size="100" maxlength="255" />

              <input type="text" name="nama_sponsor" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nama_sponsor'];?>
" size="100" maxlength="255" />

              <input type="hidden" name="logo_lama" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['image_sponsor'];?>
" />

            </div>
            <div class="form-group">
                <label for="user_name_lama" id="label_tgl_mulai">Tanggal Mulai Kontrak
                </label>
                <input type="text" name="awal_kontrak" id="awal_kontrak" class="tanggal form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['awal_kontrak'];?>
" size="10" maxlength="10" style="width:150px;" />
              </div>
              <div class="form-group">
                <label for="user_name_lama" id="label_tgl_akhir">Tanggal Berakhir Kontrak
                </label>
                <input type="text" name="akhir_kontrak" id="akhir_kontrak"  class="tanggal form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['akhir_kontrak'];?>
" size="10" maxlength="10" style="width:150px;" />
              </div>
              <div class="form-group">
                <label for="admin_name">Status * 
                </label>
                <select  class="form-control" name="status" style="width:200px;">
                  <option value="aktif" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='aktif') {?> selected="selected"<?php }?>>Aktif
                  </option>
                  <option value="nonaktif" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']=='nonaktif') {?> selected="selected"<?php }?>>Tidak Aktif
                  </option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <label for="urutan">Urutan *
                  </label>
                  <input type="number" name="urutan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['urutan'];?>
" 
                   size="100" min="1" maxlength="20" width="50" />
                </div>
              </div>
              <br/>
            <div class="form-group">

              <div style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['image_sponsor_edit']->value;?>


              </div>

              <br />

              <label for="user_name_lama">Image Sponsor

              </label> 

              <span>

                <input  type="file" accept="image/*" onchange="loadFile(event)" 

                       style="visibility:hidden; width: 1px;" 

                       id='foto' name='image_sponsor'  

                       onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> 

                <input class="btn btn-primary" type="button" value="Browse.." onclick="$(this).parent().find('input[type=file]').click();"/> 

                &nbsp;

                <span  class="badge badge-important" >

                </span>

              </span>

            </div>

            <center>

              <img id="output" style="height:200px; margin-top:20px;">

            </center> 

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
