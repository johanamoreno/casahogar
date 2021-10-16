<?php

namespace App\Controllers;

class Mascota extends BaseController
{
    public function index(){
        return view('registroMascota');
    }

    public function registrar(){
        
        $nombre=$this->request->getpost("nombre");
        $edad=$this->request->getpost("edad");
        $foto=$this->request->getpost("foto");
        $descripcion=$this->request->getpost("descripcion");
        $tipo=$this->request->getpost("tipo");

        if($this->validate('formularioMascota')){
            echo("Todo bien..");
        }else{
            $mensaje="Favor diligenciar todos los campos";
            return redirect()->to(\site_url('/mascota/registro'))->with('mensaje',$mensaje);
        }

        /*$datos=array(
            
            "nombre"=>$nombre,
            "edad"=>$edad,
            "foto"=>$foto,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );

        print_r($datos);*/
    }
}