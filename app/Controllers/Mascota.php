<?php

namespace App\Controllers;

use App\Models\MascotaModelo;

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
            try{
                $modelo=new MascotaModelo();

                $datos=array(
            
                    "nombre"=>$nombre,
                    "edad"=>$edad,
                    "foto"=>$foto,
                    "descripcion"=>$descripcion,
                    "tipo"=>$tipo
                );
                $modelo->insert($datos);
                $mensaje="Exito agregando la mascota";
                return redirect()->to(site_url('/mascota/registro'))->with('mensaje',$mensaje);

            }catch(\Exception $error){
                $mensaje=$error->getMessage();
                return redirect()->to(site_url('/mascota/registro'))->with('mensaje',$mensaje);
            }
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