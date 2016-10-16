<?php /* Smarty version 2.6.26, created on 2012-06-21 13:17:49
         compiled from web/build/admin-setting.html */ ?>
<div class="head-content">
    <h3>Administrator System</h3>
    <div class="tab-nav"> </div>
    <div class="ffhack"></div>
</div>
<table class="table-input" width="100%">
    <tr class="headrow">
        <th colspan="4">Super Administrator</th>
    </tr>
    <tr>
        <td colspan="4"> Keterangan :<br />
            Untuk sistem yang dibangun dari awal (start from zero) maka administrator dibawah ini dapat diberlakukan.<br />
            Sistem yang telah dikembangkan tidak disarankan menggunakan pengaturan administrator dibawah ini. </td>
    </tr>
    <tr>
        <td width="20%">User ID<br />
            <em>User ID</em></td>
        <td width="30%"><strong>userdemo</strong></td>
        <td width="20%">Kata Kunci<br />
            <em>Password</em></td>
        <td width="30%"><strong>userdemo</strong></td>
    </tr>
</table>
<form action="<?php echo $this->_tpl_vars['url_process']; ?>
" method="post">
    <input type="hidden" name="id_user" value="<?php echo $this->_tpl_vars['id_user']; ?>
" />
    <table class="table-view" width="100%">
        <tr height="25px">
            <th width="5%"></th>
            <th width="25%">Site Portal</th>
            <th width="30%">Access Authority</th>
            <th width="40%">Deskripsi</th>
        </tr>
        <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['list_data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list_data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['result']):
        $this->_foreach['list_data']['iteration']++;
?>
        <?php if (($this->_foreach['list_data']['iteration']-1) % 2 == 0): ?>
        <tr>
            <td class="content-center">
                <input type="checkbox" name="id_auth[]" value="<?php echo $this->_tpl_vars['result']->id_auth; ?>
" <?php if (in_array ( $this->_tpl_vars['result']->id_auth , $this->_tpl_vars['selected_id'] )): ?>checked="checked"<?php endif; ?> />
            </td>
            <td><?php echo $this->_tpl_vars['result']->site_portal; ?>
</td>
            <td><?php echo $this->_tpl_vars['result']->auth_name; ?>
</td>
            <td><?php echo $this->_tpl_vars['result']->deskripsi; ?>
</td>
        </tr>
        <?php else: ?>
        <tr class="blink-row">
            <td class="content-center">
                <input type="checkbox" name="id_auth[]" value="<?php echo $this->_tpl_vars['result']->id_auth; ?>
" <?php if (in_array ( $this->_tpl_vars['result']->id_auth , $this->_tpl_vars['selected_id'] )): ?>checked="checked"<?php endif; ?> />
            </td>
            <td><?php echo $this->_tpl_vars['result']->site_portal; ?>
</td>
            <td><?php echo $this->_tpl_vars['result']->auth_name; ?>
</td>
            <td><?php echo $this->_tpl_vars['result']->deskripsi; ?>
</td>
        </tr>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <tr>
            <td colspan="4"><input type="submit" name="save" value="Simpan" /> </td>
        </tr>
    </table>
</form>