<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:04:34
         compiled from "application/views/web/kontak/kontak.html" */ ?>
<?php /*%%SmartyHeaderCode:73243253257e9fde295ed25-86239648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '675ce9ea76b53b0c7651672bd57b33bdd602ee3f' => 
    array (
      0 => 'application/views/web/kontak/kontak.html',
      1 => 1474034950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73243253257e9fde295ed25-86239648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'label' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'datasosmed' => 0,
    'rs' => 0,
    'url_captcha' => 0,
    'kontakinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9fde2cd56b1_39784507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9fde2cd56b1_39784507')) {function content_57e9fde2cd56b1_39784507($_smarty_tpl) {?><section class="b-google-map map-theme b-bord-box" data-location-set="contact-us">  <div class="b-google-map__map-view b-google-map__map-height">    <!-- Google map load -->  </div>  <img data-retina src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
themes/default/img/google-map-marker-default.png" data-label="" class="marker-template hidden" />  <div class="b-google-map__info-window-template hidden"       data-selected-marker="0"       data-width="250">    <div class="b-google-map__info-window f-center b-google-map__info-office f-google-map__info-office">      <h4 class="f-primary-b">Dewan Minyak Sawit Indonesia (DMSI)      </h4>      <small><?php echo $_smarty_tpl->tpl_vars['label']->value['kontak'];?>
      </small>    </div>  </div></section><div class="b-desc-section-container">  <section class="container b-welcome-box">    <div class="row">      <div class="col-md-offset-2 col-md-8">        <h1 class="is-global-title f-center"><?php echo $_smarty_tpl->tpl_vars['label']->value['kontak'];?>
        </h1>        <p class="f-center">        </p>      </div>    </div>  </section>  <section class="container">    <div class="row">      <div class="col-sm-6 b-contact-form-box">        <h3 class="f-primary-b b-title-description f-title-description">          <?php echo $_smarty_tpl->tpl_vars['label']->value['sosmed'];?>
         </h3>        <div class="row">          <?php if ($_smarty_tpl->tpl_vars['notification_msg']->value!='') {?>          <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='red') {?>          <div class="b-shortcode-example">            <div class="b-alert-warning f-alert-warning">              <div class="b-right">                <i class="fa fa-times-circle-o">                </i>              </div>              <div class="b-remaining">                <i class="fa fa-exclamation-triangle">                </i> <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
              </div>            </div>          </div>          <?php }?>          <?php if ($_smarty_tpl->tpl_vars['notification_status']->value=='green') {?>          <div class="b-shortcode-example">            <div class="b-alert-success f-alert-success">              <div class="b-right">                <i class="fa fa-times-circle-o">                </i>              </div>              <div class="b-remaining">                <i class="fa fa-check-circle-o">                </i> <?php echo $_smarty_tpl->tpl_vars['notification_msg']->value;?>
              </div>            </div>          </div>          <?php }?>          <?php }?>         <div class="row b-google-map__info-window-address">          <ul class="list-unstyled">           <?php if ($_smarty_tpl->tpl_vars['datasosmed']->value!='') {?>            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>            <li class="col-xs-12">              <div class="b-google-map__info-window-address-icon f-center pull-left">                <i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
">                </i>              </div>              <div>                <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">                 <?php echo $_smarty_tpl->tpl_vars['rs']->value['nama'];?>
                </div>                <div class="desc">                   <a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
"> <?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
</a>                </div>              </div>            </li>            <?php } ?>            <?php }?>                      </ul>        </div>          <input type="hidden" name="url_captcha_refresh" id="url_captcha_refresh" value="<?php echo $_smarty_tpl->tpl_vars['url_captcha']->value;?>
" />        </div>      </div>      <div class="col-sm-6 b-contact-form-box">        <h3 class="f-primary-b b-title-description f-title-description">         <?php echo $_smarty_tpl->tpl_vars['label']->value['info'];?>
        </h3>        <div class="row b-google-map__info-window-address">          <ul class="list-unstyled">            <li class="col-xs-12">              <div class="b-google-map__info-window-address-icon f-center pull-left">                <i class="fa fa-home">                </i>              </div>              <div>                <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">                  Alamat                 </div>                <div class="desc">                  <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['alamat'];?>
                </div>              </div>            </li>            <li class="col-xs-12">              <div class="b-google-map__info-window-address-icon f-center pull-left">                <i class="fa fa-globe">                </i>              </div>              <div>                <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">                  Website resmi                 </div>                <div class="desc">                  <a href="<?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['website'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['website'];?>
                  </a>                </div>              </div>            </li>            <li class="col-xs-12">              <div class="b-google-map__info-window-address-icon f-center pull-left">                <i class="fa fa-envelope">                </i>              </div>              <div>                <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">                  email                </div>                <div class="desc"><?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['email'];?>
                </div>              </div>            </li>          </ul>        </div>      </div>    </div>  </section></div><script type="text/javascript">  function sendKontak(){    document.getElementById('form-kontak').submit();  }</script><script type="text/javascript" language="javascript"        src="http://maps.google.com/maps/api/js?key=AIzaSyCBpcCCWq5OJooCI8_wzKxYm5jrKrjITSE"></script><?php }} ?>
