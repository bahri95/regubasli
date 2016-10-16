<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:15:12
         compiled from "application/views/web/agenda/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:130162537957e9f250d8efa4-40620754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35843a6a8c83dcfdaa602fc0a8125041de4d9216' => 
    array (
      0 => 'application/views/web/agenda/detail.html',
      1 => 1473324242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130162537957e9f250d8efa4-40620754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'act_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f250de7c40_04062832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f250de7c40_04062832')) {function content_57e9f250de7c40_04062832($_smarty_tpl) {?><div class="col-md-9">  <!--start detail desc-->  <div class="b-article-box">    <div class="f-article_title f-primary-l b-title-b-hr">      <?php echo $_smarty_tpl->tpl_vars['data']->value['judul_agenda'];?>
    </div>    <div class="b-information-box f-information-box f-primary-b">      <ul>        <li>          <strong class="f-information-box__name b-information-box__name">            <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>            Date            <?php } else { ?>            Tanggal            <?php }?>           </strong>          <i class="b-dotted f-dotted">:          </i>          <span class="f-information_data"> <?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal_mulai'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal_selesai'];?>
          </span>        </li>        <li>          <strong class="f-information-box__name b-information-box__name">            <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>            Location            <?php } else { ?>            Lokasi            <?php }?>          </strong>          <i class="b-dotted f-dotted">:          </i>          <span class="f-information_data"><?php echo $_smarty_tpl->tpl_vars['data']->value['lokasi'];?>
          </span>        </li>      </ul>    </div>    <!--<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b"><?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal_mulai'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['tanggal_selesai'];?>
</div>-->    <div class="b-article__description">      <?php if ($_smarty_tpl->tpl_vars['data']->value['image_agenda']!='') {?>      <div class="col-md-6" style="float:left;margin:0 10px 10px 0;">        <img data-retina src="<?php echo $_smarty_tpl->tpl_vars['data']->value['image_agenda'];?>
" style="max-width:100%;margin:0 10px 10px 0;">      </div>      <?php }?>      <?php echo $_smarty_tpl->tpl_vars['data']->value['keterangan'];?>
    </div>    <?php if ($_smarty_tpl->tpl_vars['data']->value['file_agenda']!='') {?>    <div class="b-article__social-info">      <ul>        <li>          <div class="b-article__tag">            <span class="b-article__social-info-name f-article__social-info-name">              <i class="fa fa-download">              </i>             </span>            <a class="f-tag b-tag" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['file_agenda'];?>
">Download Lampiran            </a>          </div>        </li>      </ul>    </div>    <?php }?>  </div>    <script type="text/javascript">var switchTo5x=true;  </script>  <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js">  </script>  <script type="text/javascript">stLight.options({      publisher: "a4abca36-32a8-4c45-9716-281f17242f3b", doNotHash: false, doNotCopy: false, hashAddressBar: false}                                                );  </script>    <span class='st_sharethis_large' displayText='ShareThis'>  </span>  <span class='st_facebook_large' displayText='Facebook'>  </span>  <span class='st_twitter_large' displayText='Tweet'>  </span>  <span class='st_linkedin_large' displayText='LinkedIn'>  </span>  <span class='st_pinterest_large' displayText='Pinterest'>  </span>  <span class='st_email_large' displayText='Email'>  </span>  <!--end detail --></div><!--end col 9--><?php }} ?>
