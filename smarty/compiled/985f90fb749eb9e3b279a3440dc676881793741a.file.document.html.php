<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 10:39:02
         compiled from "application\views\private\base-layout\document.html" */ ?>
<?php /*%%SmartyHeaderCode:2591957ea41d4ef6163-08257629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985f90fb749eb9e3b279a3440dc676881793741a' => 
    array (
      0 => 'application\\views\\private\\base-layout\\document.html',
      1 => 1476866308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2591957ea41d4ef6163-08257629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea41d50f0432_78593878',
  'variables' => 
  array (
    'site_description' => 0,
    'site_keyword' => 0,
    'site_title' => 0,
    'THEMESPATH' => 0,
    'LOADSTYLE' => 1,
    'user_account' => 1,
    'url_logout_admin_process' => 1,
    'LOADJS' => 1,
    'LOADJSCRUD' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea41d50f0432_78593878')) {function content_57ea41d50f0432_78593878($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml">  <head>    <meta charset="UTF-8">    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>    <meta name='description' content='<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
' />    <meta name='keywords' content='<?php echo $_smarty_tpl->tpl_vars['site_keyword']->value;?>
' />    <meta name='robots' content='index,follow' />    <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
    </title>    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" />        <?php echo $_smarty_tpl->tpl_vars['LOADSTYLE']->value;?>
      </head>  <body class="skin-blue" onmousemove="change()">    <!-- header logo: style can be found in header.less -->    <header class="header">      <a href="#" class="logo">        <!-- Add the class icon to your logo image or logo icon to add the margining -->        Relawan Jakarta ASLI      </a>      <!-- Header Navbar: style can be found in header.less -->      <nav class="navbar navbar-static-top" role="navigation">        <!-- Sidebar toggle button-->        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">          <span class="sr-only">Toggle navigation          </span>          <span class="icon-bar">          </span>          <span class="icon-bar">          </span>          <span class="icon-bar">          </span>        </a>        <div class="navbar-right">          <ul class="nav navbar-nav">                                 <li class="dropdown user user-menu">              <a href="#" class="dropdown-toggle" data-toggle="dropdown">                <i class="glyphicon glyphicon-user">                </i>                <span><?php echo $_smarty_tpl->tpl_vars['user_account']->value['admin_name'];?>
                  <i class="caret">                  </i>                </span>              </a>              <ul class="dropdown-menu">                <!-- User image -->                <li class="user-header bg-light-blue">                  <img src="<?php echo $_smarty_tpl->tpl_vars['user_account']->value['photo'];?>
" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user_account']->value['admin_name'];?>
" />                  <p>                    <?php echo $_smarty_tpl->tpl_vars['user_account']->value['admin_name'];?>
                    <br />                    <small><?php echo $_smarty_tpl->tpl_vars['user_account']->value['jabatan'];?>
                    </small>                    <!-- <small><?php echo $_smarty_tpl->tpl_vars['user_account']->value['auth_name'];?>
</small>-->                  </p>                </li>                <!-- Menu Body -->                <li class="user-body">                  <div class="col-xs-4 text-center">                    <a href="<?php echo $_smarty_tpl->tpl_vars['user_account']->value['account_url'];?>
">Akun                    </a>                  </div>                  <div class="col-xs-4 text-center">                    <a href="<?php echo $_smarty_tpl->tpl_vars['user_account']->value['profile_url'];?>
">Profil                    </a>                  </div>                  <div class="col-xs-4 text-center">                    <a href="<?php echo $_smarty_tpl->tpl_vars['user_account']->value['profile_url'];?>
">Photo                    </a>                  </div>                </li>                <!-- Menu Footer-->                <li class="user-footer">                  <?php if ($_smarty_tpl->tpl_vars['user_account']->value['id_auth']=='5') {?>                  <div class="pull-left">                    <a href="<?php echo $_smarty_tpl->tpl_vars['user_account']->value['url_profil_museum'];?>
" class="btn btn-default btn-flat">Profil Museum                    </a>                  </div>                  <?php }?>                  <div class="pull-right">                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_logout_admin_process']->value;?>
" class="btn btn-default btn-flat">Log Out                    </a>                  </div>                </li>              </ul>            </li>                      </ul>        </div>      </nav>    </header>    <div class="wrapper row-offcanvas row-offcanvas-left">      <!-- Left side column. contains the logo and sidebar -->            <aside class="left-side sidebar-offcanvas">        <?php echo $_smarty_tpl->getSubTemplate ("private/base-layout/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
      </aside>            <!-- Right side column. Contains the navbar and content of the page -->            <aside class="right-side">        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
      </aside>      <!-- /.right-side -->          </div>    <!-- ./wrapper -->    <!-- javascript loaded -->        <?php echo $_smarty_tpl->tpl_vars['LOADJS']->value;?>
            <?php echo $_smarty_tpl->tpl_vars['LOADJSCRUD']->value;?>
        <!-- end of loaded javascript -->  </body>    <script>    var loadFile = function(event) {      var output = document.getElementById('output');      output.src = URL.createObjectURL(event.target.files[0]);    };    function change() {      var selectBox = document.getElementById("show");      var selected = selectBox.options[selectBox.selectedIndex].value;      if(selected === 'sementara'){        $('#label_tgl_mulai').show();        $('#label_tgl_akhir').show();        $('#tgl_mulai').show();        $('#tgl_akhir').show();      }      else{        $('#label_tgl_mulai').hide();        $('#label_tgl_akhir').hide();        $('#tgl_mulai').hide();        $('#tgl_akhir').hide();      }    }  </script>  </html><?php }} ?>
