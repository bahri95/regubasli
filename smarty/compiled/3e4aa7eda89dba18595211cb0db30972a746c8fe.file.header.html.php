<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:09:29
         compiled from "application/views/web/base-layout/header.html" */ ?>
<?php /*%%SmartyHeaderCode:15484805657e9ea7db8c951-38021814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e4aa7eda89dba18595211cb0db30972a746c8fe' => 
    array (
      0 => 'application/views/web/base-layout/header.html',
      1 => 1475134706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15484805657e9ea7db8c951-38021814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ea7e0a6552_58835850',
  'variables' => 
  array (
    'kontakinfo' => 0,
    'url_search_base' => 0,
    'keyword' => 0,
    'url_lang_id' => 0,
    'BASEURL' => 0,
    'url_lang_en' => 0,
    'datasosmed' => 1,
    'rs' => 0,
    'url_menu_registrasi' => 0,
    'menu' => 1,
    'homeurl' => 0,
    'profil' => 0,
    'url_menu_profil' => 0,
    'rs_profil' => 0,
    'act_lang' => 0,
    'url_menu_bagan' => 0,
    'url_menu_berita_dmsi' => 0,
    'url_menu_kegiatan_dmsi' => 0,
    'url_menu_pengumuman' => 0,
    'url_menu_anggota' => 0,
    'url_menu_berita_anggota' => 0,
    'url_menu_kegiatan_anggota' => 0,
    'informasifooter' => 0,
    'url_menu_harga' => 0,
    'url_menu_foto' => 0,
    'url_menu_video' => 0,
    'url_menu_forum' => 0,
    'url_menu_regulasi' => 0,
    'url_menu_sponsor' => 0,
    'url_menu_aspirasi' => 0,
    'url_menu_kontak' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ea7e0a6552_58835850')) {function content_57e9ea7e0a6552_58835850($_smarty_tpl) {?><header>
  <div class="b-top-options-panel">
    <div class="container">
      <div class="b-option-contacts f-option-contacts">
        <a href="#">
          <i class="fa fa-envelope-o">
          </i> <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['email'];?>

        </a>
        <a href="#">
          <i class="fa fa-phone">
          </i> <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['telp'];?>
 
        </a>
        <a href="#">
          <i class="fa fa-fax">
          </i> <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['fax'];?>

        </a>
      </div>
      <div class="b-right b-header-ico-group f-header-ico-group b-right"> 
        <span class="b-header__search-box"> 
          <i class="fa fa-search">
          </i>
          <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_search_base']->value;?>
" name="form-search"> 
            <input type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="Masukan kata pencarian"/>
          </form>
        </span> 
      </div>
      <div class="b-right">
        <div class="b-option-contacts f-primary-b">
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_lang_id']->value;?>
" title="Indonesia">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/lang/indo.png" width="20">
          </a>  &nbsp;&nbsp;
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_lang_en']->value;?>
" title="English">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/lang/eng.png" width="20">
          </a>
        </div>  
      </div>
      <span class="b-header__social-box b-header__social-box--no-fon ">
        
        <?php if ($_smarty_tpl->tpl_vars['datasosmed']->value!='') {?>
        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
">
          <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
">
          </i>
        </a>
        <?php } ?>
        <?php }?>
        
      </span>
      <!-- <div class="b-option-contacts f-option-contacts">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_registrasi']->value;?>
">
          <i class="fa fa-user">
          </i>&nbsp;Registrasi
        </a>
      </div>  --> 
    </div>
  </div>
  </div>
<div class="container b-header__box b-relative">
"DATA DALAM WEBSITE INI MASIH TERDAPAT BANYAK DUMMY DATA, JADI JANGAN DIJADIKAN SEBAGAI BAHAN INFORMASI, KARENA WEBSITE INI MASIH DALAM TAHAP PENGEMBANGAN"
  <a href="/" class="b-left b-logo">
    <img class="color-theme" data-retina src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
themes/default/img/logo_dmsi.png" alt="Logo DMSI" style="margin-left:-50px;" />
  </a>
  <div class="b-header-r b-right">
    <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide">
      <i class="fa fa-align-justify">
      </i>
    </div>
    
    <nav class="b-top-nav f-top-nav b-left j-top-nav">
   
      <ul class="b-top-nav__1level_wrap">
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='home'||$_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?>
          
          <a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
">
            <i class="fa fa-home b-menu-1level-ico">
            </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['home'];?>

            <span class="b-ico-dropdown">
              <i class="fa fa-arrow-circle-down">
              </i>
            </span>
          </a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='profil'||$_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='beritadmsi'||$_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='kegiatandmsi'||$_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='bagan') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?>
          
          <a href="#">
            <i class="fa fa-folder-open b-menu-1level-ico">
            </i>DMSI
            <span class="b-ico-dropdown">
              <i class="fa fa-arrow-circle-down">
              </i>
            </span>
          </a>
          <div class="b-top-nav__dropdomn">
            <ul class="b-top-nav__2level_wrap">
              <li class="b-top-nav__2level_title f-top-nav__2level_title">DMSI
              </li>
              <?php  $_smarty_tpl->tpl_vars['rs_profil'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs_profil']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs_profil']->key => $_smarty_tpl->tpl_vars['rs_profil']->value) {
$_smarty_tpl->tpl_vars['rs_profil']->_loop = true;
?>
                <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_profil']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rs_profil']->value['id_info'];?>
">
                  <i class="fa fa-angle-right">
                  </i>
                   <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>
                  <?php echo $_smarty_tpl->tpl_vars['rs_profil']->value['judul_english'];?>

                  <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['rs_profil']->value['judul'];?>

                  <?php }?>
                
                </a>
              </li>
              <?php } ?>
              <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_bagan']->value;?>
">
                  <i class="fa fa-angle-right">
                  </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['bagan'];?>

                </a>
              </li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_berita_dmsi']->value;?>
">
                  <i class="fa fa-angle-right">
                  </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['berita_dmsi'];?>

                </a>
              </li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_kegiatan_dmsi']->value;?>
">
                  <i class="fa fa-angle-right">
                  </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['event_dmsi'];?>

                </a>
              </li>
              <!--<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_pengumuman']->value;?>
"><i class="fa fa-angle-right"></i>Pengumuman</a></li>-->
            </ul>
          </div>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='asosiasi'||$_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='beritaanggota'||$_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='kegiatananggota') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?>
          
          <a href="#">
            <i class="fa fa-picture-o b-menu-1level-ico">
            </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['anggota_dmsi'];?>
 
            <span class="b-ico-dropdown">
              <i class="fa fa-arrow-circle-down">
              </i>
            </span>
          </a>
          <div class="b-top-nav__dropdomn">
            <ul class="b-top-nav__2level_wrap">
              <li class="b-top-nav__2level_title f-top-nav__2level_title"><?php echo $_smarty_tpl->tpl_vars['menu']->value['anggota_dmsi'];?>

              </li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_anggota']->value;?>
">
                  <i class="fa fa-angle-right">
                  </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['profil_anggota'];?>

                </a>
              </li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_berita_anggota']->value;?>
">
                  <i class="fa fa-angle-right">
                  </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['berita_anggota'];?>

                </a>
              </li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_kegiatan_anggota']->value;?>
">
                  <i class="fa fa-angle-right">
                  </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['event_anggota'];?>

                </a>
              </li>
            </ul>
          </div>
        </li>
      

       <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='informasi') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?>
          
          <a href="#">
            <i class="fa fa-code b-menu-1level-ico">
            </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['informasi'];?>
 
            <span class="b-ico-dropdown">
              <i class="fa fa-arrow-circle-down">
              </i>
            </span>
          </a>
          <div class="b-top-nav__dropdomn">
            <ul class="b-top-nav__2level_wrap">
              <li class="b-top-nav__2level_title f-top-nav__2level_title">DMSI
              </li>
              <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informasifooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url_detail'];?>
">
                  <i class="fa fa-angle-right">
                  </i>
                   <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>
                  <?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori_english'];?>

                  <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['rs']->value['kategori'];?>

                  <?php }?>
                
                </a>
              </li>
              <?php } ?>
             
            </ul>
          </div>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='harga') {?>
            <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
              <?php } else { ?>
            <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
              <?php }?>
               
              <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_harga']->value;?>
">
                <i class="fa fa-inbox b-menu-1level-ico">
                </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['grafik'];?>

              </a> 
            </li>
        <!-- <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
<a href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
#petaperkebunan"><i class="fa fa-picture-o b-menu-1level-ico"></i>Peta Perkebunan</a>
</li> -->
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='foto'||$_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='video') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?>
          
          <a href="#">
            <i class="fa fa-code b-menu-1level-ico">
            </i>Media
            <span class="b-ico-dropdown">
              <i class="fa fa-arrow-circle-down">
              </i>
            </span>
          </a>
          <div class="b-top-nav__dropdomn">
            <ul class="b-top-nav__2level_wrap">
              <li class="b-top-nav__2level_title f-top-nav__2level_title">Media
              </li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_foto']->value;?>
">
                  <i class="fa fa-angle-right">
                  </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['foto'];?>

                </a>
              </li>
              <li class="b-top-nav__2level f-top-nav__2level f-primary fontsubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_video']->value;?>
">
                  <i class="fa fa-angle-right">
                  </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['video'];?>

                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- <li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big"> <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_forum']->value;?>
"><i class="fa fa-inbox b-menu-1level-ico"></i>Forum</a> </li> -->
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='regulasi') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?>
           
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_regulasi']->value;?>
">
            <i class="fa b-menu-1 level-ico"></i> <?php echo $_smarty_tpl->tpl_vars['menu']->value['regulasi'];?>

          </a> 
        </li>
        
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='sponsor') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?>  
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_sponsor']->value;?>
">
            <i class="fa b-menu-1 level-ico">
            </i>Sponsorship
          </a> 
        </li> 
        <!-- <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='aspirasi') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?> 
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_aspirasi']->value;?>
">
            <i class="fa fa-inbox b-menu-1level-ico">
            </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['aspirasi'];?>

          </a> 
        </li>      -->
        <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu_aktif']=='kontak') {?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b is-active-top-nav__1level">
          <?php } else { ?>
        <li class="b-top-nav__1level f-top-nav__1level f-primary-b putih">
          <?php }?> 
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_menu_kontak']->value;?>
">
            <i class="fa fa-list b-menu-1level-ico">
            </i><?php echo $_smarty_tpl->tpl_vars['menu']->value['kontak'];?>

          </a> 
        </li>   
      </ul>
    </nav>
  </div>
</div>
</header>
<?php }} ?>
