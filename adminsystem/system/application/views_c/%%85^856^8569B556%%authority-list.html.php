<?php /* Smarty version 2.6.26, created on 2015-04-04 07:47:22
         compiled from web/build/authority-list.html */ ?>
<div class="head-content">
    <h3>Access Authority</h3>
    <div class="tab-nav">
        <ul>
            <li><a href="<?php echo $this->_tpl_vars['url_add']; ?>
">Tambah</a></li>
            <li><a href="<?php echo $this->_tpl_vars['url_list']; ?>
" class="tab-nav-active">List</a></li>
        </ul>
    </div>
    <div class="ffhack"></div>
</div>
<table class="table-view" width="100%">
    <tr height="25px">
        <th width="5%">No</th>
        <th width="20%">Site Portal</th>
        <th width="25%">Nama</th>
        <th width="35%">Deskripsi</th>
        <th width="15%"></th>
    </tr>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['list_data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list_data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['result']):
        $this->_foreach['list_data']['iteration']++;
?>
    <?php if (($this->_foreach['list_data']['iteration']-1) % 2 == 0): ?>
    <tr>
        <td><?php echo $this->_tpl_vars['no']++; ?>
.</td>
        <td><?php echo $this->_tpl_vars['result']->site_portal; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']->auth_name; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']->deskripsi; ?>
</td>
        <td class="content-center">
            <a href="<?php echo site_url('build/authority/edit') ?>/<?php echo $this->_tpl_vars['result']->id_auth; ?>
" class="button-edit">Edit</a>
            <a href="<?php echo site_url('build/authority/hapus') ?>/<?php echo $this->_tpl_vars['result']->id_auth; ?>
" class="button-edit">Hapus</a>
        </td>
    </tr>
    <?php else: ?>
    <tr class="blink-row">
        <td><?php echo $this->_tpl_vars['no']++; ?>
.</td>
        <td><?php echo $this->_tpl_vars['result']->site_portal; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']->auth_name; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']->deskripsi; ?>
</td>
        <td class="content-center">
            <a href="<?php echo site_url('build/authority/edit') ?>/<?php echo $this->_tpl_vars['result']->id_auth; ?>
" class="button-edit">Edit</a>
            <a href="<?php echo site_url('build/authority/hapus') ?>/<?php echo $this->_tpl_vars['result']->id_auth; ?>
" class="button-edit">Hapus</a>
        </td>
    </tr>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</table>