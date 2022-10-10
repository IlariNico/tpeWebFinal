<?php
require_once './app/vistas/vista.autenticacion.php';
require_once './app/modelos/modelo.usuario.php';


class ControladorAutenticacion {
    private $vista;
    private $modelo;
    
    public function __construct() {
        $this->modelo = new ModeloUsuario();
        $this->vista = new VistaAutenticacion();
    }

    public function mostrarFormLogin() {
        $this->vista->mostrarFormLogin();
    }

    public function  validarUsuario() {
        // toma los datos del form
        
        $nombre = $_POST['nombre_usuario'];
        $contraseña = $_POST['contraseña'];

        // busco el usuario por nombre
        $usuario = $this->modelo->obtenerUsuario($nombre);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($usuario && password_verify($contraseña, $usuario->contraseña)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $usuario->ID;
            $_SESSION['USER_NAME'] = $usuario->nombre;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un error
           $this->vista->mostrarFormLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function deslogear() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}