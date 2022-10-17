<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:46:42
  from 'C:\xampp\htdocs\Tpe Web2\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634de9620d5b15_08256204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce6d64d7561ce5c3f15941619414f06401a44aa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe Web2\\templates\\formLogin.tpl',
      1 => 1665422931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634de9620d5b15_08256204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form method="POST" action="validar" class="mt-5" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Iniciar sesion</h3>

            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" name="nombre_usuario" class="form-control form-control-lg" />
              <label class="form-label" >Nombre usuario</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" name="contraseña" class="form-control form-control-lg" />
              <label class="form-label"  for="typePasswordX-2">Contraseña</label>
            </div>

            <hr class="my-4">
            <div class="form-outline mb-4">
              <label class="form-label"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</label>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</form><?php }
}
