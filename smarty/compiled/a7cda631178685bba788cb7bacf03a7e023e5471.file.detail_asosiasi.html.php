<?php /* Smarty version Smarty-3.1.17, created on 2016-09-30 02:17:51
         compiled from "application/views/private/asosiasi/detail_asosiasi.html" */ ?>
<?php /*%%SmartyHeaderCode:4096427957ee038f3d3842-51990273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7cda631178685bba788cb7bacf03a7e023e5471' => 
    array (
      0 => 'application/views/private/asosiasi/detail_asosiasi.html',
      1 => 1474287158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4096427957ee038f3d3842-51990273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'asosiasi' => 0,
    'rs' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ee038f407533_34836447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ee038f407533_34836447')) {function content_57ee038f407533_34836447($_smarty_tpl) {?>
 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['asosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
 <div class="container" id="modal-detail-asosiasi<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_asosiasi'];?>
" style="display:none;" >

      <div class="row">

    

        <div class="col-xs-12  toppad" >

   

   

          <div class="panel panel-info">

            <div class="panel-heading">

              <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_asosiasi'];?>
</h3>

            </div>

            <div class="panel-body">

              <div class="row">

                <div class="col-md-3 col-lg-3 " align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/asosiasi/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_asosiasi'];?>
/<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo_asosiasi'];?>
" height="100" class="img-circle img-responsive"> </div>

                

               

                <div class=" col-md-9 col-lg-9 "> 

                  <table class="table table-user-information">

                    <tbody>
                      <tr>

                        <td>Provinsi</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_propinsi'];?>
</td>

                      </tr>
                      <tr>

                        <td>Kota</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama_kota'];?>
</td>

                      </tr>

                      <tr>

                        <td>Alamat</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['alamat'];?>
</td>

                      </tr>

                     <tr>

                        <td>Kode Pos</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['kodepos'];?>
</td>

                      </tr>

                      

                      <tr>

                        <td>Email</td>

                        <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['rs']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['email'];?>
</a></td>

                      </tr>

                       

                  
                       <tr>

                        <td>Telepon</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['telepon'];?>
</td>

                      </tr>

                      <tr>

                        <td>Fax</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['fax'];?>
</td>

                      </tr>

                    
                      <tr>

                        <td>Website</td>

                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['website'];?>
</a></td>

                      </tr>

      
                        

                     

                    </tbody>

                  </table>

                  

                

                </div>

              </div>

            </div>

                 

            

          </div>

        </div>

      </div>

    </div>



<div id="modal-detail-asosiasi-footer" style="display:none;">

  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

</div>

<?php } ?>

<?php }} ?>
