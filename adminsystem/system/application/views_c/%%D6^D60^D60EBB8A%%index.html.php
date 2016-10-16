<?php /* Smarty version 2.6.26, created on 2010-06-13 11:18:54
         compiled from web/login/index.html */ ?>
<div class="loginWrapper">
    <div class="loginBox-head">
        <h1>Build System</h1>
    </div>
    <div class="loginBox-body">
        <?php if ($this->_tpl_vars['logged_in'] == 'still'): ?>
        <p><img src="<?php echo $this->_tpl_vars['BASEURL']; ?>
themes/login/img/notification-icon.png" alt="" /> You are still login. <br />
            Untuk mengulangi login anda harus <a href="<?php echo $this->_tpl_vars['url_logout']; ?>
"><strong>logout</strong></a> terlebih dahulu. <br />
            <br />
            Klik <a href="<?php echo $this->_tpl_vars['url_menu']; ?>
"><b>kembali</b></a> untuk menuju ke halaman menu utama</p>
        <?php elseif ($this->_tpl_vars['logged_in'] == 'error'): ?>
        <p><img src="<?php echo $this->_tpl_vars['BASEURL']; ?>
themes/login/img/notification-icon.png" alt="" /> Proses login tidak berhasil. <br />
            Username atau password yang anda masukkan salah. <br />
            <br />
            Klik <a href="<?php echo $this->_tpl_vars['BASEURL']; ?>
"><b>kembali</b></a> untuk melakukan login ulang </p>
        <?php else: ?>
        <p><img src="<?php echo $this->_tpl_vars['BASEURL']; ?>
themes/login/img/notification-icon.png" alt="" />You are enter restricted area, <strong>Please Login</strong> First to acces this page !!</p>
        <form action="<?php echo $this->_tpl_vars['url_process']; ?>
" method="post">
            <label for="aid_username">Username</label>
            <input type="text" name="username"/>
            <br />
            <label for="aid_password">Password</label>
            <input type="password" name="pass"/>
            <br />
            <label> </label>
            <input class="button" type="submit" value="" name="save[login]" />
        </form>
        <?php endif; ?>
    </div>
</div>