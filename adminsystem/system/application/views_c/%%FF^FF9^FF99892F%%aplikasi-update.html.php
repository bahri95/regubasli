<?php /* Smarty version 2.6.26, created on 2015-04-16 09:41:07
         compiled from web/build/aplikasi-update.html */ ?>
<div class="head-content">
    <h3>Application Settings</h3>
    <div class="tab-nav">
        <ul>
            <li><a href="#" class="tab-nav-active">Edit</a></li>
        </ul>
    </div>
    <div class="ffhack"></div>
</div>
<!-- notification template -->
<?php if ($this->_tpl_vars['notification_msg'] <> ""): ?>
<div class="notification red">
    <!-- list of notification message -->
    <ul>
        <?php echo $this->_tpl_vars['notification_msg']; ?>

    </ul>
</div>
<?php endif; ?>
<!-- End of notification template -->
<form action="<?php echo $this->_tpl_vars['url_process']; ?>
" method="post">
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Edit Application Settings</th>
        </tr>
        <tr>
            <td width="25%">Nama Web Site *<br />
                <em>Site Name</em></td>
            <td width="75%"><input type="text" name="site_name" value="<?php echo $this->_tpl_vars['data']->site_name; ?>
" maxlength="255" size="50" /></td>
        </tr>
        <tr>
            <td>Deskripsi Web Site *<br />
                <em>Site Description</em></td>
            <td><textarea name="site_description" cols="50" rows="5"><?php echo $this->_tpl_vars['data']->site_description; ?>
</textarea></td>
        </tr>
        <tr>
            <td>Alamat Web Site *<br />
                <em>Site Url</em></td>
            <td><input type="text" name="site_url" value="<?php echo $this->_tpl_vars['data']->site_url; ?>
" maxlength="255" size="50" /></td>
        </tr>
        <tr>
            <td>Email *<br />
                <em>Email</em></td>
            <td><input type="text" name="site_email" value="<?php echo $this->_tpl_vars['data']->site_email; ?>
" maxlength="255" size="50" /></td>
        </tr>
        <tr>
            <td>SMTP Host *<br />
                <em>SMTP Host</em></td>
            <td><input type="text" name="smtp_host" value="<?php echo $this->_tpl_vars['data']->smtp_host; ?>
" maxlength="200" size="50" /></td>
        </tr>
        <tr>
            <td>SMTP Port *<br />
                <em>SMTP Port</em></td>
            <td><input type="text" name="smtp_port" value="<?php echo $this->_tpl_vars['data']->smtp_port; ?>
" maxlength="4" size="4" /></td>
        </tr>
        <tr>
            <td>SMTP Userid *<br />
                <em>SMTP Userid</em></td>
            <td><input type="text" name="smtp_username" value="<?php echo $this->_tpl_vars['data']->smtp_username; ?>
" maxlength="100" size="50" /></td>
        </tr>
        <tr>
            <td>SMTP Password *<br />
                <em>SMTP Password</em></td>
            <td><input type="text" name="smtp_password" value="<?php echo $this->_tpl_vars['data']->smtp_password; ?>
" maxlength="100" size="50" /></td>
        </tr>
        <tr>
            <td>Status Perbaikan<br />
                <em>Maintenance Status</em></td>
            <td><label>
                    <input type="radio" name="maintenance" value="yes" <?php if ($this->_tpl_vars['data']->maintenance == 'yes'): ?>checked="checked"<?php endif; ?> />
                           offline</label>
                <label>
                    <input type="radio" name="maintenance" value="no" <?php if ($this->_tpl_vars['data']->maintenance == 'no'): ?>checked="checked"<?php endif; ?> />
                           Online</label>
            </td>
        </tr>
        <tr>
            <td>Pesan Perbaikan<br />
                <em>Maintenance Message</em></td>
            <td><textarea name="maintenance_message" cols="55" rows="6"><?php echo $this->_tpl_vars['data']->maintenance_message; ?>
</textarea></td>
        </tr>
        <tr>
            <td>Versi *<br />
                <em>Version</em></td>
            <td><input type="text" name="version" value="<?php echo $this->_tpl_vars['data']->version; ?>
" maxlength="10" size="10" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="save[update]" value="Simpan" class="edit-button" /></td>
        </tr>
    </table>
</form>