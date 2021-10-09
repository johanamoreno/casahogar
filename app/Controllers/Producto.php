<?php

namespace App\Controllers;

class Producto extends BaseController{
    
    public function index(){
        return view('registroProducto');
    }

    public function registrar(){
        
        $producto=$this->request->getpost("producto");
        $foto=$this->request->getpost("foto");
        $precio=$this->request->getpost("precio");
        $descripcion=$this->request->getpost("descripcion");
        $tipo=$this->request->getpost("tipo");

        $datos=array(

            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );

        print_r($datos);
    }

}