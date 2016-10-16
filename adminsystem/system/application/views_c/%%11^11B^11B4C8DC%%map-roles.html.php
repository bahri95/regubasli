<?php /* Smarty version 2.6.26, created on 2011-08-23 11:54:18
         compiled from web/build/map-roles.html */ ?>
<div class="head-content">
    <h3>Features Permission</h3>
    <div class="tab-nav">
        <ul>
            <li><a href="#" class="tab-nav-active">Manage Roles</a></li>
            <li><a href="<?php echo $this->_tpl_vars['url_list']; ?>
">List</a></li>
        </ul>
    </div>
    <div class="ffhack"></div>
</div>
<form action="<?php echo $this->_tpl_vars['url_process']; ?>
" method="post">
    <input type="hidden" name="id_auth" value="<?php echo $this->_tpl_vars['id_auth']; ?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th><?php echo $this->_tpl_vars['judul_site']; ?>
 - <?php echo $this->_tpl_vars['auth_name']; ?>
</th>
        </tr>
    </table>
    <div class="tree-main">
        <ul class="tree-content">
            <?php echo $this->_tpl_vars['list_menu_data']; ?>

        </ul>
    </div>
    <table class="table-input" width="100%">
        <tr>
            <td><input type="submit" name="save[update]" value="Simpan" class="edit-button" /></td>
        </tr>
    </table>
</form>