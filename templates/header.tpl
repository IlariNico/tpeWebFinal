<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Tienda hardware-Nico</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="">Tienda hardware-Nico</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Lista Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="lista-cat">Lista Categorias</a>
                  </li>
                  {if isset($smarty.session.USER_NAME)}
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="agregar-producto">Agregar prod</a>
                  </li>
                  {/if}
                  {if isset($smarty.session.USER_NAME)}
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="agregar-cat">Agregar cat</a>
                  </li>
                  {/if}
                  {if !isset($smarty.session.USER_NAME)}
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="login">Login</a>
                    </li>
                  {else} 
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout ({$smarty.session.USER_NAME})</a>
                    </li>
                  {/if}
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">
