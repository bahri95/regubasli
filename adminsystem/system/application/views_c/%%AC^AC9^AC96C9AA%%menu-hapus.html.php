<?php /* Smarty version 2.6.26, created on 2015-04-04 09:40:18
         compiled from web/build/menu-hapus.html */ ?>
<div class="head-content">
    <h3>Navigation - <?php echo $this->_tpl_vars['judul_site']; ?>
</h3>
    <div class="tab-nav">
        <ul>
            <li><a href="#" class="tab-nav-active">Hapus</a></li>
            <li><a href="<?php echo $this->_tpl_vars['url_add']; ?>
">Tambah</a></li>
            <li><a href="<?php echo $this->_tpl_vars['url_portal']; ?>
">Site Portal</a></li>
        </ul>
    </div>
    <div class="ffhack"></div>
</div>
<!-- form input -->
<form action="<?php echo $this->_tpl_vars['url_process']; ?>
" method="post">
    <input type="hidden" name="id_group" value="<?php echo $this->_tpl_vars['data']->id_group; ?>
" />
    <input type="hidden" name="id_nav" value="<?php echo $this->_tpl_vars['data']->id_nav; ?>
" />
    <input type="hidden" name="id_parent" value="<?php echo $this->_tpl_vars['data']->id_parent; ?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="4">Hapus Menu</th>
        </tr>
        <tr>
            <td width="15%">Judul<br />
                <em>Title</em></td>
            <td width="20%"><?php echo $this->_tpl_vars['data']->title; ?>
</td>
            <td width="15%">Deskripsi<br />
                <em>Description</em></td>
            <td width="20%"><?php echo $this->_tpl_vars['data']->description; ?>
</td>
        </tr>
        <tr>
            <td>Kelompok<br />
                <em>Application Group</em></td>
            <td><?php echo $this->_tpl_vars['data']->app_path; ?>
</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Modul<br />
                <em>Module</em></td>
            <td><?php echo $this->_tpl_vars['data']->module_path; ?>
</td>
            <td>Halaman<br />
                <em>Page</em></td>
            <td><?php echo $this->_tpl_vars['data']->page_path; ?>
</td>
        </tr>
        <tr>
            <td>Digunakan<br />
                <em>Uses</em></td>
            <td><?php echo $this->_tpl_vars['data']->uses; ?>
</td>
            <td>Urutan<br />
                <em>Order Number</em></td>
            <td><?php echo $this->_tpl_vars['data']->order_num; ?>
</td>
        </tr>
        <tr>
            <td>Ditampilkan<br />
                <em>Displayed</em></td>
            <td><?php echo $this->_tpl_vars['data']->displayed; ?>
</td>
            <td>Tipe Halaman<br />
                <em>Page Type</em></td>
            <td><?php echo $this->_tpl_vars['data']->page_type; ?>
</td>
        </tr>
        <tr>
            <td colspan="4"><input type="submit" name="save[delete]" value="Hapus" class="edit-button" /></td>
        </tr>
    </table>
</form>