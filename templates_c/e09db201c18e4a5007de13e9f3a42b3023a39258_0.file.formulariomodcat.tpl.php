<?php
/* Smarty version 4.2.1, created on 2022-10-14 22:44:24
  from 'C:\xampp\htdocs\Tpe Web2\templates\formulariomodcat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349ca28978a55_05665133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e09db201c18e4a5007de13e9f3a42b3023a39258' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\formulariomodcat.tpl',
      1 => 1665780226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349ca28978a55_05665133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;
if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?>
  /<?php echo $_smarty_tpl->tpl_vars['id']->value;?>

<?php }?>" method="POST">
  <div class="mb-3">
    <label  class="form-label">Nombre Cat</label>
    <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
">
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['Descripcion']->value;?>
" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
