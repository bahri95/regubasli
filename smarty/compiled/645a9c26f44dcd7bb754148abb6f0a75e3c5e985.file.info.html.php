<?php /* Smarty version Smarty-3.1.17, created on 2016-10-16 05:55:04
         compiled from "application\views\web\base-layout\info.html" */ ?>
<?php /*%%SmartyHeaderCode:288885802fa18e3ab92-37966872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '645a9c26f44dcd7bb754148abb6f0a75e3c5e985' => 
    array (
      0 => 'application\\views\\web\\base-layout\\info.html',
      1 => 1476152298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288885802fa18e3ab92-37966872',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fa18e56125_80894466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fa18e56125_80894466')) {function content_5802fa18e56125_80894466($_smarty_tpl) {?>

        <!-- Top Bar
        ============================================= -->
        <div id="top-bar">

            <div class="container clearfix">

                <div class="col_half nobottommargin">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="login-register.html">Login</a>
                                <div class="top-link-section">
                                    <form id="top-login" role="form">
                                        <div class="input-group" id="top-login-username">
                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                            <input type="email" class="form-control" placeholder="Email address" required="">
                                        </div>
                                        <div class="input-group" id="top-login-password">
                                            <span class="input-group-addon"><i class="icon-key"></i></span>
                                            <input type="password" class="form-control" placeholder="Password" required="">
                                        </div>
                                        <label class="checkbox">
                                          <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                        <button class="btn btn-danger btn-block" type="submit">Sign in</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .top-links end -->

                </div>

                <div class="col_half fright col_last nobottommargin">

                    <!-- Top Social
                    ============================================= -->
                    <div id="top-social">
                        <ul>
                            <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                            <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                            <li><a href="#" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
                            <li><a href="#" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
                            <li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
                            <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                            <li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
                            <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@canvas.com</span></a></li>
                        </ul>
                    </div><!-- #top-social end -->

                </div>

            </div>
<?php }} ?>
