<?php

namespace App\Controllers;

use App\Models\ProductoModelo;

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

        if($this->validate('formularioProducto')){
            try{
                $modelo=new ProductoModelo();

                $datos=array(

                    "nombre"=>$producto,
                    "foto"=>$foto,
                    "precio"=>$precio,
                    "descripcion"=>$descripcion,
                    "tipo"=>$tipo
                );

                $modelo->insert($datos);

                $mensaje="Exito agregando el producto";
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

            }catch(\Exception $error){
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
            }
        }else{
            $mensaje="Favor diligenciar todos los campos";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }
    }

    public function buscar(){

        try{

            $modelo=new ProductoModelo();
            $resultado=$modelo->findAll();
            $productos=array("productos"=>$resultado);

            return view('listaProductos',$productos);

        }catch(\Exception $error){

        $mensaje=$error->getMessage();
        return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }
    }
    
    public function eliminar($id){
        try{
            $modelo=new ProductoModelo();
            $modelo->where('id',$id)->delete();
            $mensaje="Exito eliminando el producto";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

        }catch(\Exception $error){
            $mensaje=$error->getMessage();
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }
        
    }
  
    public function editar($id){

        $producto=$this->request->getpost("producto");
        $foto=$this->request->getpost("foto");
        $precio=$this->request->getpost("precio");
        $descripcion=$this->request->getpost("descripcion");
        $tipo=$this->request->getpost("tipo");

        if($this->validate('modificarProducto')){
            try{
                $modelo=new ProductoModelo();

                $datos=array(

                    "nombre"=>$producto,
                    "foto"=>$foto,
                    "precio"=>$precio,
                    "descripcion"=>$descripcion,
                    "tipo"=>$tipo
                );

                $modelo->update($id,$datos);

                $mensaje="Exito editando el producto";
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);

            }catch(\Exception $error){
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
            }
        }else{
            $mensaje="Favor diligenciar todos los campos";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }

    }


}