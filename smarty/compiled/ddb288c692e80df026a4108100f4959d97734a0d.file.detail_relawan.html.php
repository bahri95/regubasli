<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 05:36:07
         compiled from "application\views\private\relawan\detail_relawan.html" */ ?>
<?php /*%%SmartyHeaderCode:1065858032ced522ef9-84524482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb288c692e80df026a4108100f4959d97734a0d' => 
    array (
      0 => 'application\\views\\private\\relawan\\detail_relawan.html',
      1 => 1476675366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065858032ced522ef9-84524482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58032ced559a08_12363746',
  'variables' => 
  array (
    'data' => 0,
    'rs' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58032ced559a08_12363746')) {function content_58032ced559a08_12363746($_smarty_tpl) {?>
 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
 <div class="container" id="modal-detail-relawan<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_relawan'];?>
" style="display:none;" >

      <div class="row" style="width:100%; height:400px; overflow:auto;">

    

        <div class="col-xs-12  toppad" >

   

   

          <div class="panel panel-info">

            <div class="panel-heading">

              <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama'];?>
</h3>

            </div>

            <div class="panel-body">

              <div class="row">

                <div class="col-md-3 col-lg-3 " align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/relawan/<?php echo $_smarty_tpl->tpl_vars['rs']->value['id_relawan'];?>
/<?php echo $_smarty_tpl->tpl_vars['rs']->value['foto'];?>
" height="100" class="img-circle img-responsive"> </div>

                

               

                <div class=" col-md-9 col-lg-9 "> 

                  <table class="table table-user-information" >

                    <tbody>
                      <tr>

                        <td>Jabatan</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['jabatan'];?>
</td>

                      </tr>
                      <tr>

                        <td>Profil</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['content'];?>
</td>

                      </tr>

                      <tr>

                        <td>Deskripsi</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['deskripsi'];?>
</td>

                      </tr>

                     <tr>

                        <td>Pendidikan</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['pendidikan'];?>
</td>

                      </tr>

                      

                      <tr>

                        <td>Riwayat Jabatan</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['riwayat'];?>
</td>

                      </tr>

                       

                  
                       <tr>

                        <td>Penghargaan</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['penghargaan'];?>
</td>

                      </tr>

                      <tr>

                        <td>No urut menu</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['order_num'];?>
</td>

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
