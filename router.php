<?php
require_once './app/controladores/controlador.categoria.php';
require_once './app/controladores/controlador.producto.php';
require_once './app/controladores/controlador.autenticacion.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion
$params = explode('/', $action);


$controladorCategorias = new controladorCategoria();
$controladorProductos = new controladorProducto();




// tabla de ruteo
switch ($params[0]) {
    case 'login':
        $controladorAutenticacion = new ControladorAutenticacion();
        $controladorAutenticacion->mostrarFormLogin();
        break;
    case 'validar':
        $controladorAutenticacion = new ControladorAutenticacion();
        $controladorAutenticacion->validarUsuario();
        break;
    case 'home':
        $controladorProductos->mostrarProductos();
        break;
    case 'logout':
        $controladorAutenticacion = new ControladorAutenticacion();
        $controladorAutenticacion->deslogear();
    case 'list':
        $controladorProductos->mostrarProductos();
        break;
    case 'mostrarprod':
        $controladorProductos->mostrarProducto($params[1]);
        break;
    case 'lista-cat':
        $controladorCategorias->mostrarCategorias();
        break;
    case 'items-cat':
        $controladorProductos->mostrarProductosPorCat($params[1]);
        break;
    case 'agregar-producto':
        $controladorProductos->agregarProducto();
        break;
    case 'agregar-cat':
        $controladorCategorias->agregarCategoria();
        break;            
    case 'modificar-producto':
        $controladorProductos->modificarProducto($params[1]);
        break;
    case 'modificar-cat':
        $controladorCategorias->modificarCategoria($params[1]);
        break;
    case 'borrar':
        $controladorProductos->borrarProducto($params[1]);
        break;
    case 'borrar-cat':
        $controladorCategorias->borrarCategoria($params[1]);
        break;    
 
}
