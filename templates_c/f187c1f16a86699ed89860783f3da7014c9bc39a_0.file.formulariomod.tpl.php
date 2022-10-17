<?php
/* Smarty version 4.2.1, created on 2022-10-16 18:43:24
  from 'C:\xampp\htdocs\Tpe Web2\templates\formulariomod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c34accf2ed7_32248017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f187c1f16a86699ed89860783f3da7014c9bc39a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\formulariomod.tpl',
      1 => 1665780707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c34accf2ed7_32248017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?>
  /<?php echo $_smarty_tpl->tpl_vars['id']->value;?>

<?php }?>
  " method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Nombre Producto</label>
<input name="nombre" type="text" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['Nombre']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
"<?php }?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Descripción</label>
    <input name="descripcion" type="text" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['Nombre']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['Descripcion']->value;?>
"<?php }?>" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Marca</label>
    <input name="marca" type="text" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['Nombre']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value;?>
"<?php }?>>
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input name="precio" type="number" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['Nombre']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['Precio']->value;?>
"<?php }?> >
  </div>
  <select class="form-select" name="categoria" aria-label="Default select example" required>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
      <option <?php if ($_smarty_tpl->tpl_vars['categoria']->value->ID == $_smarty_tpl->tpl_vars['Categoria']->value) {?>
        selected
      <?php }?>
      value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </select>
  <div class="mb-3">
    <label  class="form-label">Imagen</label>
    <input name="imagen" type="file" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
