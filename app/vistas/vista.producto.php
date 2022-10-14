<?php
require_once ('./libs/smarty-4.2.1/libs/Smarty.class.php');
class vistaProducto{
    
    private $smarty;

    function __construct(){
        $this->smarty=new Smarty();
    }

    function mostrarProductos($productos){
       $this->smarty->assign('productos',$productos);

       $this->smarty->display('mostrarProductos.tpl');
    }
    function mostrarProducto($producto,$categoria){
        $this->smarty->assign('producto',$producto);
        $this->smarty->assign('categoria',$categoria);
        
        $this->smarty->display('detallesProducto.tpl');
        }
    function mostrarFormIngreso($cats,$error=null){
        $this->smarty->assign('action',"agregar-producto");
        $this->smarty->assign('Categoria',"");
        $this->smarty->assign('Categorias',$cats);
        $this->smarty->display('formulariomod.tpl');
    }
    function mostrarFormModificarProd($producto,$cats){
        $this->smarty->assign('id',$producto->ID);
        $this->smarty->assign('action',"modificar-producto");
        $this->smarty->assign('Nombre',$producto->nombre);
        $this->smarty->assign('Descripcion',$producto->descripcion);
        $this->smarty->assign('Precio',$producto->precio);
        $this->smarty->assign('Marca',$producto->marca);
        $this->smarty->assign('Categoria',$producto->id_categoria);
        $this->smarty->assign('Categorias',$cats);
        $this->smarty->display('formulariomod.tpl');
    }
    function redireccionarHome(){
        header("Location: " . BASE_URL);
    }    
}
