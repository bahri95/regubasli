<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 04:42:59
         compiled from "application\views\web\kontak\kontak.html" */ ?>
<?php /*%%SmartyHeaderCode:387557ea41969a0cc4-13062283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6be10bd53afe4a71ac11cd481908023e03bb7a00' => 
    array (
      0 => 'application\\views\\web\\kontak\\kontak.html',
      1 => 1476844976,
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

                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                        <script type="text/javascript" src="js/jquery.gmap.js"></script>

                        <script type="text/javascript">

                            $('#google-map').gMap({

                                address: 'Melbourne, Australia',
                                maptype: 'ROADMAP',
                                zoom: 14,
                                markers: [
                                    {
                                        address: "Melbourne, Australia",
                                        html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                                        icon: {
                                            image: "images/icons/map-icon-red.png",
                                            iconsize: [32, 39],
                                            iconanchor: [32,39]
                                        }
                                    }
                                ],
                                doubleclickzoom: false,
                                controls: {
                                    panControl: true,
                                    zoomControl: true,
                                    mapTypeControl: true,
                                    scaleControl: false,
                                    streetViewControl: false,
                                    overviewMapControl: false
                                }

                            });

                        </script>

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

                        <!-- Modal Contact Form
                        ============================================= -->
                       <!--  <a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block button-xlarge center">Click here to Send an Email</a>
 -->
                        <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                                            <div class="col_half">
                                                <label for="template-contactform-name">Name <small>*</small></label>
                                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                            </div>

                                            <div class="col_half col_last">
                                                <label for="template-contactform-email">Email <small>*</small></label>
                                                <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                            </div>

                                            <div class="clear"></div>

                                            <div class="col_half">
                                                <label for="template-contactform-phone">Phone</label>
                                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                            </div>

                                            <div class="col_half col_last">
                                                <label for="template-contactform-service">Services</label>
                                                <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                                    <option value="">-- Select One --</option>
                                                    <option value="Wordpress">Wordpress</option>
                                                    <option value="PHP / MySQL">PHP / MySQL</option>
                                                    <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                                    <option value="Graphic Design">Graphic Design</option>
                                                </select>
                                            </div>

                                            <div class="clear"></div>

                                            <div class="col_full">
                                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                                <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                                            </div>

                                            <div class="col_full">
                                                <label for="template-contactform-message">Message <small>*</small></label>
                                                <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                            </div>

                                            <div class="col_full hidden">
                                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                            </div>

                                            <div class="col_full">
                                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                            </div>

                                        </form>

                                        <script type="text/javascript">
                                            $("#template-contactform").validate({
                                                submitHandler: function(form) {
                                                    $('.form-process').fadeIn();
                                                    $(form).ajaxSubmit({
                                                        target: '#contact-form-result',
                                                        success: function() {
                                                            $('.form-process').fadeOut();
                                                            $('#template-contactform').find('.sm-form-control').val('');
                                                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                                            SEMICOLON.widget.notifications($('#contact-form-result'));
                                                        }
                                                    });
                                                }
                                            });
                                        </script>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- Modal Contact Form End -->
<?php }} ?>
