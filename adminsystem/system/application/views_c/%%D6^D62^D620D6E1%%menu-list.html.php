<?php /* Smarty version 2.6.26, created on 2011-08-23 11:45:36
         compiled from web/build/menu-list.html */ ?>
<div class="head-content">
    <h3>Navigation</h3>
    <div class="tab-nav">
        <ul>
            <li><a href="#" class="tab-nav-active">Site Portal</a></li>
        </ul>
    </div>
    <div class="ffhack"></div>
</div>
<table class="table-view" width="100%">
    <tr height="25px">
        <th width="5%">ID</th>
        <th width="20%">Nama</th>
        <th width="30%">Deskripsi</th>
        <th width="25%">Judul Portal</th>
        <th width="10%">Menu</th>
        <th width="10%"></th>
    </tr>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['list_data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list_data']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['result']):
        $this->_foreach['list_data']['iteration']++;
?>
    <?php if (($this->_foreach['list_data']['iteration']-1) % 2 == 0): ?>
    <tr>
        <td class="content-center"><strong><?php echo $this->_tpl_vars['result']->id_group; ?>
</strong></td>
        <td><?php echo $this->_tpl_vars['result']->nama; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']->deskripsi; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']->judul_site; ?>
</td>
        <td class="content-center"><?php echo $this->_tpl_vars['result']->menu; ?>
</td>
        <td class="content-center">
            <a href="<?php echo site_url('build/menu/add') ?>/<?php echo $this->_tpl_vars['result']->id_group; ?>
" class="button-edit">Tambah</a>
        </td>
    </tr>
    <?php else: ?>
    <tr class="blink-row">
        <td class="content-center"><strong><?php echo $this->_tpl_vars['result']->id_group; ?>
</strong></td>
        <td><?php echo $this->_tpl_vars['result']->nama; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']->deskripsi; ?>
</td>
        <td><?php echo $this->_tpl_vars['result']->judul_site; ?>
</td>
        <td class="content-center"><?php echo $this->_tpl_vars['result']->menu; ?>
</td>
        <td class="content-center">
            <a href="<?php echo site_url('build/menu/add') ?>/<?php echo $this->_tpl_vars['result']->id_group; ?>
" class="button-edit">Tambah</a>
        </td>
    </tr>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</table>