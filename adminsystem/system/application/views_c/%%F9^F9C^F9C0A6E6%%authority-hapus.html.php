<?php /* Smarty version 2.6.26, created on 2010-06-19 23:58:31
         compiled from web/build/authority-hapus.html */ ?>
<div class="head-content">
    <h3>Access Authority</h3>
    <div class="tab-nav">
        <ul>
            <li><a href="#" class="tab-nav-active">Hapus</a></li>
            <li><a href="<?php echo $this->_tpl_vars['url_add']; ?>
">Tambah</a></li>
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
            <th colspan="2">Hapus Hak Akses</th>
        </tr>
        <tr>
            <td width="25%">Nama *<br />
                <em>Name</em></td>
            <td><?php echo $this->_tpl_vars['data']->auth_name; ?>
</td>
        </tr>
        <tr>
            <td>Deskripsi *<br />
                <em>Description</em></td>
            <td><?php echo $this->_tpl_vars['data']->deskripsi; ?>
</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Hapus" name="save[hapus]" class="edit-button" /></td>
        </tr>
    </table>
</form>