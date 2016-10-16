<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:09:29
         compiled from "application/views/web/home/aspirasi_slider.html" */ ?>
<?php /*%%SmartyHeaderCode:178605061657e9ea7e7943b7-00993069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1367d782c7ad05708948f1133cb2152cd05ebfd9' => 
    array (
      0 => 'application/views/web/home/aspirasi_slider.html',
      1 => 1475146474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178605061657e9ea7e7943b7-00993069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ea7e8a9f83_46172754',
  'variables' => 
  array (
    'data_tahun_tbs' => 0,
    'r' => 0,
    'tahun_tbs' => 0,
    'url_data_grafik_tbs' => 0,
    'url_data_tabel_tbs' => 0,
    'data_tahun_cpo' => 0,
    'tahun_cpo' => 0,
    'url_data_grafik_cpo_domes' => 0,
    'url_data_tabel_cpo' => 0,
    'data_tahun_ekspor' => 0,
    'tahun_ekspor' => 0,
    'url_data_grafik_pasarglobal' => 0,
    'url_data_tabel_ekspor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ea7e8a9f83_46172754')) {function content_57e9ea7e8a9f83_46172754($_smarty_tpl) {?> <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">

  <div class="b-tabs f-tabs j-tabs b-tabs-reset b-tabs--secondary f-tabs--secondary">
    <ul style="margin-left:20%;">
      <li>
        <a href="#tab_7" data-toggle="tab">Tandan Buah SEGAR (TBS)</a>
      </li>
       <li>
        <a href="#tab_9" data-toggle="tab">CPO Domestik (KPB dan Astra)</a>
      </li>
      <li>
        <a href="#tab_8" data-toggle="tab">Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam)</a>
      </li>
    </ul>
    
    <div class="b-tabs__content">
      
      
      <div class="tab-pane active" id="tab_7">
        
              <div class="box box-warning">
                <div class="box-body no-padding">
					<div style="margin-right:100px;float:right;padding:10px; display:block;">
						<select name="tahun_data_tbs" id="tahun_data_tbs" onchange="javascript:loadGrafikTBS();" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tahun_tbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>
							<?php } ?>
						</select>
					</div>
					<div style="width:90%;text-align:center; display:block;margin:0 auto;padding:20px;">
						<button class="button-xs button-blue" onclick="javascript:loadGrafikBarTBS();" style="margin:5px;">Grafik Bar</button>
						<button class="button-xs button-blue" onclick="javascript:loadGrafikLineTBS();" style="margin:5px;">Grafik Line</button>
					 </div>	
				  <input type="hidden" name="tahun_tbs" id="tahun_tbs" value="<?php echo $_smarty_tpl->tpl_vars['tahun_tbs']->value;?>
" />
				  <input type="hidden" id="url_data_grafik_tbs" name="url_data_grafik_tbs" value="<?php echo $_smarty_tpl->tpl_vars['url_data_grafik_tbs']->value;?>
" />
				  <input type="hidden" id="url_data_tabel_tbs" name="url_data_tabel_tbs" value="<?php echo $_smarty_tpl->tpl_vars['url_data_tabel_tbs']->value;?>
" />
                  <div id="container_tbs" style="width:90%; min-height:400px; margin: 0 auto;"></div>
                  <div id="container_tbs_tabel" style="width:90%; margin: 0 auto;"></div>
                 
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            
      </div>
      <!--tab 7-->
      <!-- tab 9-->
       <div class="tab-pane" id="tab_9">
        
              <div class="box box-warning">
                <div class="box-body no-padding">
					<div style="margin-right:100px;float:right;padding:10px; display:block;">
						<select name="tahun_data_cpo" id="tahun_data_cpo" onchange="javascript:loadGrafikCPO();" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tahun_cpo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>
							<?php } ?>
						</select>
					</div>
					<div style="width:90%;text-align:center; display:block;margin:0 auto;padding:20px;">
						<button class="button-xs button-blue" onclick="javascript:loadGrafikBarCPO();" style="margin:5px;">Grafik Bar</button>
						<button class="button-xs button-blue" onclick="javascript:loadGrafikLineCPO();" style="margin:5px;">Grafik Line</button>
					 </div>	
				  <input type="hidden" name="tahun_cpo" id="tahun_cpo" value="<?php echo $_smarty_tpl->tpl_vars['tahun_cpo']->value;?>
" />
				  <input type="hidden" id="url_data_grafik_cpodomestik" name="url_data_grafik_cpodomestik" value="<?php echo $_smarty_tpl->tpl_vars['url_data_grafik_cpo_domes']->value;?>
" />
				  <input type="hidden" id="url_data_tabel_cpo" name="url_data_tabel_cpo" value="<?php echo $_smarty_tpl->tpl_vars['url_data_tabel_cpo']->value;?>
" />
                  <div id="container_cpodomestik" style="width:90%;  min-height:400px; margin: 0 auto;"></div>
                  <div id="container_cpodomestik_tabel" style="width:90%;  margin: 0 auto;"></div>
                  
                  
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            
      </div>
      <!--tab 9-->
      <div class="tab-pane" id="tab_8">
        
              <div class="box box-warning">
                <div class="box-body no-padding">
					<div style="margin-right:100px;float:right;padding:10px; display:block;">
						<select name="tahun_data_ekspor" id="tahun_data_ekspor" onchange="javascript:loadGrafikEkspor();" class="form-control">
							<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tahun_ekspor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>
							<?php } ?>
						</select>
					</div>
					<div style="width:90%;text-align:center; display:block;margin:0 auto;padding:20px;">
						<button class="button-xs button-blue" onclick="javascript:loadGrafikBarEkspor();" style="margin:5px;">Grafik Bar</button>
						<button class="button-xs button-blue" onclick="javascript:loadGrafikLineEkspor();" style="margin:5px;">Grafik Line</button>
					 </div>	
					
					<input type="hidden" name="tahun_ekspor" id="tahun_ekspor" value="<?php echo $_smarty_tpl->tpl_vars['tahun_ekspor']->value;?>
" />
				  <input type="hidden" id="url_data_grafik_pasarglobal" name="url_data_grafik_pasarglobal" value="<?php echo $_smarty_tpl->tpl_vars['url_data_grafik_pasarglobal']->value;?>
" />
				  <input type="hidden" id="url_data_tabel_ekspor" name="url_data_tabel_ekspor" value="<?php echo $_smarty_tpl->tpl_vars['url_data_tabel_ekspor']->value;?>
" />
                  <div id="container_pasarglobal" style="width:90%;  min-height:400px; margin: 0 auto;"></div>
                  <div id="container_pasarglobal_tabel" style="width:90%;  margin: 0 auto;"></div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
           
      </div>
      <!--tab 8-->
    </div>
    <!--tab content -->
  </div>
  



</div>
</div>
</div>
<?php }} ?>
