<?php /* Smarty version 2.6.26, created on 2016-06-28 12:15:39
         compiled from web/base/document.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
        <meta name='description' content='Code Igniter with Smarty' />
        <meta name='keywords' content='smarty' />
        <meta name='robots' content='index,follow' />
        <title><?php echo $this->_tpl_vars['page_title']; ?>
 - SmartonCI 1.0 Build System</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['themespath']; ?>
" media="screen" />
	<?php echo $this->_tpl_vars['LOAD_STYLE']; ?>

    </head>
    <body class="common">
        <!-- javascript loaded -->
        <?php echo $this->_tpl_vars['LOAD_JAVASCRIPT']; ?>

        <!-- end of loaded javascript -->
        <div class="page">
            <div class="header">
                <h3>SmartonCI 1.0 Build System</h3>
                <h2>Application tools untuk mengelola web site portal, menu navigasi dan user authority.</h2>
            </div>
            <div class="navigation">
                <ul>
                    <li class="back-home"><a href="<?php echo $this->_tpl_vars['url_home']; ?>
">Build System</a></li>
                </ul>
                <div class="logout-button"> <a href="<?php echo $this->_tpl_vars['url_logout']; ?>
">logout</a> </div>
            </div>
            <div class="main-content">
                <div class="content">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['template_content']).".html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div class="sidebar">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "web/base/sidebar.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
                <div class="ffhack"></div>
            </div>
        </div>
    </body>
</html>