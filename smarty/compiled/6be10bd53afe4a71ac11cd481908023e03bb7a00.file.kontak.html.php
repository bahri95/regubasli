<?php /* Smarty version Smarty-3.1.17, created on 2016-10-26 08:27:18
         compiled from "application\views\web\kontak\kontak.html" */ ?>
<?php /*%%SmartyHeaderCode:387557ea41969a0cc4-13062283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6be10bd53afe4a71ac11cd481908023e03bb7a00' => 
    array (
      0 => 'application\\views\\web\\kontak\\kontak.html',
      1 => 1477463224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '387557ea41969a0cc4-13062283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea41969f2d53_33372426',
  'variables' => 
  array (
    'kontakinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea41969f2d53_33372426')) {function content_57ea41969f2d53_33372426($_smarty_tpl) {?> <!-- Google Map
                    ============================================= -->
                    <div class="col-md-6 bottommargin">

                        <section id="google-map" class="gmap" style="height: 240px;"></section>

                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEfwVj291_x5iq_RQnPiriU2k2MlPe_3U"></script>
                       
                       
                    </div><!-- Google Map End -->

                    <div class="col-md-6">

                        <!-- Contact Info
                        ============================================= -->
                        <div class="col_two_fifth">

                            <address>
                                <strong>Alamat:</strong><br>
                                 <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['alamat'];?>
<br>
                                <br>
                            </address>
                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['telp'];?>
<br>
                            <abbr title="Fax"><strong>Fax:</strong></abbr> <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['fax'];?>
<br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> <?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['email'];?>


                        </div><!-- Contact Info End -->

                       

                        <div class="clear"></div>

                      
<?php }} ?>
