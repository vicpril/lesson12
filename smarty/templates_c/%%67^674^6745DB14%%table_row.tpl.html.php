<?php /* Smarty version 2.6.28, created on 2015-05-06 14:29:39
         compiled from table_row.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'table_row.tpl.html', 1, false),)), $this); ?>
<tr <?php echo ((is_array($_tmp=@$this->_tpl_vars['status'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
>
    <td><?php echo $this->_tpl_vars['exp']['title']; ?>
</td>
    <td><button name="show" value="<?php echo $this->_tpl_vars['exp']['id']; ?>
" class="btn btn-info btn-xs" formaction="index.php">i</button></td>
    <td><?php echo $this->_tpl_vars['exp']['seller_name']; ?>
</td>
    <td><?php echo $this->_tpl_vars['exp']['price']; ?>
</td>
    <td><?php echo $this->_tpl_vars['exp']['time']; ?>
</td>
    <td><button name="delete" value="<?php echo $this->_tpl_vars['exp']['id']; ?>
" class="btn btn-danger btn-xs" formaction="index.php">X</button></td>
</tr>