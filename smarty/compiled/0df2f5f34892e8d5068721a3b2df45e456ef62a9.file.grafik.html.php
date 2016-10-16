<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:17:21
         compiled from "application/views/private/dashboard/grafik.html" */ ?>
<?php /*%%SmartyHeaderCode:55962779357ea036dd5d001-89027527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df2f5f34892e8d5068721a3b2df45e456ef62a9' => 
    array (
      0 => 'application/views/private/dashboard/grafik.html',
      1 => 1474963236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55962779357ea036dd5d001-89027527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea036ddb2df4_26863718',
  'variables' => 
  array (
    'url_private' => 0,
    'total_foto' => 0,
    'total_album' => 0,
    'total_video' => 0,
    'url_video' => 0,
    'total_informasi' => 0,
    'url_opini' => 0,
    'url_sesebi' => 0,
    'berita' => 0,
    'berita_anggota' => 0,
    'event' => 0,
    'event_anggota' => 0,
    'data_tahun_tbs' => 0,
    'r' => 0,
    'url_data_grafik_tbs' => 0,
    'url_data_tabel_tbs' => 0,
    'data_tahun_cpo' => 0,
    'url_data_grafik_cpo_domes' => 0,
    'url_data_tabel_cpo' => 0,
    'data_tahun_ekspor' => 0,
    'url_data_grafik_pasarglobal' => 0,
    'url_data_tabel_ekspor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea036ddb2df4_26863718')) {function content_57ea036ddb2df4_26863718($_smarty_tpl) {?><section class="content-header">  <h1>    Dashboard    <small>panel    </small>  </h1>  <ol class="breadcrumb">    <li>      <a href="<?php echo $_smarty_tpl->tpl_vars['url_private']->value;?>
">        <i class="fa fa-dashboard">        </i> Home      </a>    </li>    <li class="active">Dashboard    </li>  </ol></section><!-- Main content --><section class="content">  <div class="row">    <div class="col-lg-3 col-xs-6">      <!-- small box -->      <div class="small-box bg-aqua">        <div class="inner">          <h4>            <table>              <tr>                <td>Foto &nbsp;                 </td>                <td><?php echo $_smarty_tpl->tpl_vars['total_foto']->value;?>
 dari <?php echo $_smarty_tpl->tpl_vars['total_album']->value;?>
 Album                </td>              <tr/>              <tr>                <td>Video &nbsp;                 </td>                  <td><?php echo $_smarty_tpl->tpl_vars['total_video']->value;?>
                </td>              </tr>            </table>          </h4>          <p>            &nbsp;          </p>        </div>        <div class="icon">          <i class="glyphicon glyphicon-camera                    ">          </i>        </div>        <a href="#" class="small-box-footer">          Foto dan Video         <!--  <i class="fa fa-arrow-circle-right">          </i> -->        </a>       <!--  <a href="<?php echo $_smarty_tpl->tpl_vars['url_video']->value;?>
" class="small-box-footer">          Video           <i class="fa fa-arrow-circle-right">          </i>        </a> -->      </div>    </div>    <!-- ./col -->    <div class="col-lg-3 col-xs-6">      <!-- small box -->      <div class="small-box bg-green">        <div class="inner">          <h5>            <table>              <tr>                <td>Informasi &nbsp;                 </td>                <td><?php echo $_smarty_tpl->tpl_vars['total_informasi']->value;?>
                </td>              <tr/>               <tr>                <td>&nbsp;                 </td>                <td>&nbsp;                 </td>              <tr/>              <tr>                <td>&nbsp;                 </td>                             <tr/>                          </table>          </h5>          <p>            &nbsp;          </p>        </div>        <div class="icon">          <i  class="glyphicon glyphicon-send                    ">          </i>        </div>        <a href="#" class="small-box-footer">          Informasi          <!-- <i class="fa fa-arrow-circle-right">          </i> -->        </a>        <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['url_opini']->value;?>
" class="small-box-footer">          Opini           <i class="fa fa-arrow-circle-right">          </i>        </a>        <a href="<?php echo $_smarty_tpl->tpl_vars['url_sesebi']->value;?>
" class="small-box-footer">          Serba-serbi           <i class="fa fa-arrow-circle-right">          </i>        </a> -->      </div>    </div>    <!-- ./col -->    <div class="col-lg-3 col-xs-6">      <!-- small box -->      <div class="small-box bg-yellow">        <div class="inner">          <h4>            <table>              <tr>                <td>Berita DMSI&nbsp;                 </td>                <td><?php echo $_smarty_tpl->tpl_vars['berita']->value;?>
                </td>              <tr/>              <tr>                <td>Berita Anggota&nbsp;                 </td>                  <td><?php echo $_smarty_tpl->tpl_vars['berita_anggota']->value;?>
                </td>              </tr>            </table>          </h4>          <p>           &nbsp;          </p>        </div>        <div class="icon">          <i class="glyphicon glyphicon-bullhorn">          </i>        </div>        <a href="#" class="small-box-footer">          Berita          <!--  <i class="fa fa-arrow-circle-right">          </i> -->        </a>             </div>    </div>    <!-- ./col -->    <div class="col-lg-3 col-xs-6">      <!-- small box -->                    <div class="small-box bg-red">                      <div class="inner">                        <h4>                          <table>                            <tr>                              <td>Event DMSI &nbsp;                               </td>                              <td><?php echo $_smarty_tpl->tpl_vars['event']->value;?>
                              </td>                            <tr/>                            <tr>                              <td>Event Anggota &nbsp;                               </td>                                <td><?php echo $_smarty_tpl->tpl_vars['event_anggota']->value;?>
                              </td>                            </tr>                                                    </table>                        </h4>                      <p>                        &nbsp;                      </p>                    </div>                    <div class="icon">                      <i class="glyphicon glyphicon-calendar">                      </i>                    </div>                    <a href="#" class="small-box-footer">                      Event                       <!-- <i class="fa fa-arrow-circle-right">                      </i> -->                    </a>                         </div>                </div>                <!-- ./col -->              </div>              <!-- /.row -->              <div class="row">              <div class="box">                 <div class="nav-tabs-custom">    <ul class="nav nav-tabs">          <li>        <a href="#tab_7" data-toggle="tab">Tandan Buah SEGAR (TBS)        </a>      </li>       <li>        <a href="#tab_9" data-toggle="tab">CPO Domestik (KPB dan Astra)        </a>      </li>      <li>        <a href="#tab_8" data-toggle="tab">Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam)        </a>      </li>    </ul>    <div class="tab-content">      <!-- <form method="post"><div class="form-group"><label for="user_name_lama">Tahun *</label><input type="text" name="tahun" value="" id="tahun" onchange="submit()" class="form-control" size="10" maxlength="10" style="width:150px;" /></div></form> -->            <div class="tab-pane active" id="tab_7">        <section class="content">          <!-- Small boxes (Stat box) -->          <div class="row">            <div class="col-md-12">              <div class="box box-warning">                <div class="box-body no-padding">				<div style="margin-right:100px;float:right;padding:10px; display:block;">						<select name="tahun_data_tbs" id="tahun_data_tbs" onchange="javascript:loadGrafikTBS();" class="form-control">							<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tahun_tbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>							<?php } ?>						</select>					</div>					<div style="width:90%;text-align:center; display:block;margin:0 auto;padding:20px;">						<button class="btn bg-blue btn-flat" onclick="javascript:loadGrafikBarTBS();" style="margin:5px;">Grafik Bar</button>						<button class="btn bg-blue btn-flat" onclick="javascript:loadGrafikLineTBS();" style="margin:5px;">Grafik Line</button>					 </div>	                  <input type="hidden" id="url_data_grafik_tbs" name="url_data_grafik_tbs" value="<?php echo $_smarty_tpl->tpl_vars['url_data_grafik_tbs']->value;?>
" />                  <input type="hidden" id="url_data_tabel_tbs" name="url_data_tabel_tbs" value="<?php echo $_smarty_tpl->tpl_vars['url_data_tabel_tbs']->value;?>
" />                  <div id="container_tbs" style="width:90%; min-height:400px; margin: 0 auto;"></div>                  <div id="container_tbs_tabel" style="width:90%; margin: 0 auto;"></div>                </div>                <!-- /.box-body -->              </div>              <!-- /.box -->            </div>            <!-- /.col -->          </div>          <!-- /.row -->        </section>        <!-- /.content -->      </div>      <!--tab 7-->      <!-- tab 9-->       <div class="tab-pane" id="tab_9">        <section class="content">          <!-- Small boxes (Stat box) -->          <div class="row">            <div class="col-md-12">              <div class="box box-warning">                <div class="box-body no-padding">					<div style="margin-right:100px;float:right;padding:10px; display:block;">						<select name="tahun_data_cpo" id="tahun_data_cpo" onchange="javascript:loadGrafikCPO();" class="form-control">							<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tahun_cpo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>							<?php } ?>						</select>					</div>					<div style="width:90%;text-align:center; display:block;margin:0 auto;padding:20px;">						<button class="btn bg-blue btn-flat" onclick="javascript:loadGrafikBarCPO();" style="margin:5px;">Grafik Bar</button>						<button class="btn bg-blue btn-flat" onclick="javascript:loadGrafikLineCPO();" style="margin:5px;">Grafik Line</button>					 </div>						                   <input type="hidden" id="url_data_grafik_cpodomestik" name="url_data_grafik_cpodomestik" value="<?php echo $_smarty_tpl->tpl_vars['url_data_grafik_cpo_domes']->value;?>
" />                  <input type="hidden" id="url_data_tabel_cpo" name="url_data_tabel_cpo" value="<?php echo $_smarty_tpl->tpl_vars['url_data_tabel_cpo']->value;?>
" />                  <div id="container_cpodomestik" style="width:90%;  min-height:400px; margin: 0 auto;"></div>                  <div id="container_cpodomestik_tabel" style="width:90%;  margin: 0 auto;"></div>                </div>                <!-- /.box-body -->              </div>              <!-- /.box -->            </div>            <!-- /.col -->          </div>          <!-- /.row -->        </section>        <!-- /.content -->      </div>      <!--tab 9-->      <div class="tab-pane" id="tab_8">        <section class="content">          <!-- Small boxes (Stat box) -->          <div class="row">            <div class="col-md-12">              <div class="box box-warning">                <div class="box-body no-padding">					<div style="margin-right:100px;float:right;padding:10px; display:block;">						<select name="tahun_data_ekspor" id="tahun_data_ekspor" onchange="javascript:loadGrafikEkspor();" class="form-control">							<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_tahun_ekspor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>							<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
" ><?php echo $_smarty_tpl->tpl_vars['r']->value['tahun'];?>
</option>							<?php } ?>						</select>					</div>					<div style="width:90%;text-align:center; display:block;margin:0 auto;padding:20px;">						<button class="btn bg-blue btn-flat" onclick="javascript:loadGrafikBarEkspor();" style="margin:5px;">Grafik Bar</button>						<button class="btn bg-blue btn-flat" onclick="javascript:loadGrafikLineEkspor();" style="margin:5px;">Grafik Line</button>					 </div>						                   <input type="hidden" id="url_data_grafik_pasarglobal" name="url_data_grafik_pasarglobal" value="<?php echo $_smarty_tpl->tpl_vars['url_data_grafik_pasarglobal']->value;?>
" />                  <input type="hidden" id="url_data_tabel_ekspor" name="url_data_tabel_ekspor" value="<?php echo $_smarty_tpl->tpl_vars['url_data_tabel_ekspor']->value;?>
" />                  <div id="container_pasarglobal" style="width:90%;  min-height:400px; margin: 0 auto;"></div>                  <div id="container_pasarglobal_tabel" style="width:90%;  margin: 0 auto;"></div>                </div>                <!-- /.box-body -->              </div>              <!-- /.box -->            </div>            <!-- /.col -->          </div>          <!-- /.row -->        </section>        <!-- /.content -->      </div>      <!--tab 8-->    </div>    <!--tab content -->      </div>    </div>    <!-- /.box-body -->  </div></section><!-- right col --></div><!-- /.row (main row) --></section><!-- /.content --><?php }} ?>
