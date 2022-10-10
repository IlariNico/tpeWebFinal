{include file="header.tpl"}
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
              <label class="form-label">{$error}</label>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</form>