<?php /* Smarty version 2.6.26, created on 2015-04-04 07:32:57
         compiled from web/build/portal-add.html */ ?>
<div class="head-content">
    <h3>Site Portal</h3>
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
    <input type="hidden" name="id_group" value="<?php echo $this->_tpl_vars['data']->id_group; ?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Tambah Portal</th>
        </tr>
        <tr>
            <td width="25%">Nama *<br />
                <em>Name</em></td>
            <td><input type="text" name="nama" value="<?php echo $this->_tpl_vars['data']->nama; ?>
" size="30" maxlength="50" /></td>
        </tr>
        <tr>
            <td>Deskripsi *<br />
                <em>Description</em></td>
            <td><input type="text" name="deskripsi" value="<?php echo $this->_tpl_vars['data']->deskripsi; ?>
" size="100" maxlength="255" /></td>
        </tr>
        <tr>
            <td>Judul *<br />
                <em>Site Title</em></td>
            <td><input type="text" name="judul_site" value="<?php echo $this->_tpl_vars['data']->judul_site; ?>
" size="100" maxlength="255" /></td>
        </tr>
        <tr>
            <td>Meta Tag Deskripsi <br />
                <em>Meta Description</em></td>
            <td><input type="text" name="meta_desc" value="<?php echo $this->_tpl_vars['data']->meta_desc; ?>
" size="100" maxlength="255" /></td>
        </tr>
        <tr>
            <td>Meta Tag Keyword <br />
                <em>Meta Keyword</em></td>
            <td><input type="text" name="meta_key" value="<?php echo $this->_tpl_vars['data']->meta_key; ?>
" size="100" maxlength="255" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan" name="save[insert]" class="edit-button" /></td>
        </tr>
    </table>
</form>