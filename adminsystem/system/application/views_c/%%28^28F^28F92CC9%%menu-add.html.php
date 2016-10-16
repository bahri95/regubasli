<?php /* Smarty version 2.6.26, created on 2011-08-23 11:45:39
         compiled from web/build/menu-add.html */ ?>
<!-- javascript -->
<?php echo '
<script type="text/javascript">
    $(function() {
        $(".tree-content").treeview({
            collapsed: true,
            animated: "medium",
            control: ".tree-control",
            persist: "location"
        });
    })
</script>
'; ?>

<!-- end of javascript -->
<div class="head-content">
    <h3>Navigation - <?php echo $this->_tpl_vars['judul_site']; ?>
</h3>
    <div class="tab-nav">
        <ul>
            <?php echo $this->_tpl_vars['active_edit']; ?>

            <li><a href="<?php echo $this->_tpl_vars['url_add']; ?>
" <?php echo $this->_tpl_vars['active_add']; ?>
>Tambah</a></li>
            <li><a href="<?php echo $this->_tpl_vars['url_portal']; ?>
">Site Portal</a></li>
        </ul>
    </div>
    <div class="ffhack"></div>
</div>
<!-- form input -->
<form action="<?php echo $this->_tpl_vars['url_process']; ?>
" method="post">
    <input type="hidden" name="id_group" value="<?php echo $this->_tpl_vars['id_group']; ?>
" />
    <input type="hidden" name="id_nav" value="<?php echo $this->_tpl_vars['data']->id_nav; ?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="4">Tambah Menu</th>
        </tr>
        <tr>
            <td width="15%">Judul *<br />
                <em>Title</em></td>
            <td width="20%"><input type="text" name="title" value="<?php echo $this->_tpl_vars['data']->title; ?>
" maxlength="100" size="30" /></td>
            <td width="15%">Deskripsi *<br />
                <em>Description</em></td>
            <td width="20%"><input type="text" name="description" value="<?php echo $this->_tpl_vars['data']->description; ?>
" maxlength="255" size="40" /></td>
        </tr>
        <tr>
            <td>Kelompok *<br />
                <em>Group</em></td>
            <td><input type="text" name="app_path" value="<?php echo $this->_tpl_vars['data']->app_path; ?>
" maxlength="50" size="30" /></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Modul *<br />
                <em>Module</em></td>
            <td><input type="text" name="module_path" value="<?php echo $this->_tpl_vars['data']->module_path; ?>
" maxlength="50" size="30" /></td>
            <td>Halaman *<br />
                <em>Page</em></td>
            <td><input type="text" name="page_path" value="<?php echo $this->_tpl_vars['data']->page_path; ?>
" maxlength="50" size="30" /></td>
        </tr>
        <tr>
            <td>Digunakan<br />
                <em>Uses</em></td>
            <td><label>
                    <input type="radio" name="uses" value="0" checked="checked" />
                    Tidak</label>
                <label>
                    <input type="radio" name="uses" value="1" <?php echo $this->_tpl_vars['uses_checked']; ?>
 />
                           Ya</label>
            </td>
            <td>Urutan *<br />
                <em>Order Number</em></td>
            <td><input type="text" name="order_num" value="<?php echo $this->_tpl_vars['data']->order_num; ?>
" maxlength="2" size="3" /></td>
        </tr>
        <tr>
            <td>Ditampilkan<br />
                <em>Displayed</em></td>
            <td><label>
                    <input type="radio" name="displayed" value="0" checked="checked" />
                    Tidak</label>
                <label>
                    <input type="radio" name="displayed" value="1" <?php echo $this->_tpl_vars['displayed_checked']; ?>
 />
                           Ya</label>
            </td>
            <td>Tipe Halaman<br />
                <em>Page Type</em></td>
            <td>
                <select name="page_type">
                    <option value="view" selected="selected">View</option>
                    <option value="process" <?php echo $this->_tpl_vars['page_type_process']; ?>
>Process</option>
                </select>
            </td>
        </tr>
    </table>
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th>Induk Menu</th>
        </tr>
    </table>
    <div class="tree-main">
        <ul class="tree-content">
            <li>
                <label>
                    <input type="radio" name="id_parent" value="0" checked="checked" />
                    <strong>Root Menu</strong></label>
                <ul>
                    <?php echo $this->_tpl_vars['list_menu_data']; ?>
                   
                </ul>
            </li>
        </ul>
    </div>
    <table class="table-input" width="100%">
        <tr>
            <td><input type="submit" name="save[insert]" value="Simpan" class="edit-button" /></td>
        </tr>
    </table>
</form>