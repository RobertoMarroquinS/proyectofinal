<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Trabajadores extends Controller{
    public function verTrabajadores(){
     $trabajador = new Usuario();
    $datos['lista_trabajador'] = $trabajador->findAll();
    return view('trabajadores',$datos);
    }

    public function agregarTrabajador(){
        $idusuario=$this->request->getVar('txt_idusuario');
        $nombre=$this->request->getVar('txt_nombre');
        $apellido=$this->request->getVar('txt_apellido');
        $celular=$this->request->getVar('txt_celular');
        $dpi=$this->request->getVar('txt_dpi');
        $email=$this->request->getVar('txt_email');
        $contraseña=$this->request->getVar('txt_contraseña');
        $idtipousuario=$this->request->getVar('txt_id_tipo_usuario');
        $idalmacen=$this->request->getVar('txt_id_almacen');
        $datos=['id_usuario'=>$idusuario, 'nombre'=>$nombre, 'apellido'=>$apellido, 'celular'=>$celular, 'dpi'=>$dpi, 'email'=>$email, 'contrasena'=>$contraseña, 'id_tipo_usuario'=>$idtipousuario, 'id_almacen'=>$idalmacen];
        $trabajador = new Usuario();
        $trabajador ->insert($datos);
        $datos['lista_trabajador'] = $trabajador->findAll();
        return view('trabajadores',$datos);
        
    }

    public function datosTrabajadores($idusuario=null){
        $trabajador = new Usuario();
        $datos['usuario']=$trabajador->where('id_usuario',$idusuario)->first();
        return view('frm_actualizar_trabajador',$datos);
    }

    public function actualizarTrabajadores(){
        $idusuario=$this->request->getVar('txt_idusuario');
        $nombre=$this->request->getVar('txt_nombre');
        $apellido=$this->request->getVar('txt_apellido');
        $celular=$this->request->getVar('txt_celular');
        $dpi=$this->request->getVar('txt_dpi');
        $email=$this->request->getVar('txt_email');
        $contraseña=$this->request->getVar('txt_contraseña');
        $idtipousuario=$this->request->getVar('txt_id_tipo_usuario');
        $idalmacen=$this->request->getVar('txt_id_almacen');
        $datos=['nombre'=>$nombre,'apellido'=>$apellido,'celular'=>$celular,'dpi'=>$dpi,'email'=>$email,'contrasena'=>$contraseña,'id_tipo_usuario'=>$idtipousuario,'id_almacen'=>$idalmacen];
        $trabajador = new Usuario();
        $trabajador->update($idusuario,$datos);
        $datos['lista_trabajador'] = $trabajador->findAll();
        return view('trabajadores',$datos);
    }
    public function eliminarTrabajadores($idusuario){
        $trabajador = new Usuario();
        $trabajador->delete($idusuario);
        $datos['lista_trabajador'] = $trabajador->findAll();
        return view('trabajadores',$datos);
    }
}