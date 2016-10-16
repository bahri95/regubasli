<?php /* Smarty version 2.6.26, created on 2015-04-04 07:47:24
         compiled from web/build/authority-add.html */ ?>
<div class="head-content">
    <h3>Access Authority</h3>
    <div class="tab-nav">
        <ul>
            <?php echo $this->_tpl_vars['active_edit']; ?>

            <li><a href="<?php echo $this->_tpl_vars['url_add']; ?>
" <?php echo $this->_tpl_vars['active_add']; ?>
>Tambah</a></li>
            <li><a href="<?php echo $this->_tpl_vars['url_list']; ?>
">List</a></li>
        </ul>
    </div>
    <div class="ffhack"></div>
</div>
<form action="<?php echo $this->_tpl_vars['url_process']; ?>
" method="post">
    <input type="hidden" name="id_auth" value="<?php echo $this->_tpl_vars['data']->id_auth; ?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Tambah Authority</th>
        </tr>
        <tr>
            <td width="25%">Site Portal *<br />
                <em>Site Portal</em></td>
            <td>
                <select name="id_group">
                    <option value="0">-- pilih site portal --</option>
                    <?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['list_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list_group']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group_result']):
        $this->_foreach['list_group']['iteration']++;
?>
                    <option value="<?php echo $this->_tpl_vars['group_result']->id_group; ?>
" <?php if ($this->_tpl_vars['group_result']->id_group == $this->_tpl_vars['selected']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['group_result']->nama; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama *<br />
                <em>Name</em></td>
            <td><input type="text" name="auth_name" value="<?php echo $this->_tpl_vars['data']->auth_name; ?>
" size="40" maxlength="50" /></td>
        </tr>
        <tr>
            <td>Deskripsi *<br />
                <em>Description</em></td>
            <td><input type="text" name="deskripsi" value="<?php echo $this->_tpl_vars['data']->deskripsi; ?>
" size="100" maxlength="255" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan" name="save[insert]" class="edit-button" /></td>
        </tr>
    </table>
</form>