<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Almacen;
class Almacenes extends Controller{
    public function verAlmacen(){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $almacen = new Almacen();
        $datos['lista_almacen'] = $almacen->findAll();
        return view('almacen', $datos);            
    }
    public function agregarAlmacen(){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $idalmacen=$this->request->getVar('txt_idalmacen');
        $idtalmacen=$this->request->getVar('txt_idtalmacen');
        $nombre=$this->request->getVar('txt_nombre');
        $direccion=$this->request->getVar('txt_direccion');
        $telefono=$this->request->getVar('txt_telefono');
        $datos=['id_almacen'=>$idalmacen,'id_tipo_almacen'=>$idtalmacen,'nombre'=>$nombre,'direccion'=>$direccion,'telefono'=>$telefono];
        $almacen = new Almacen();
        $almacen->insert($datos);
        $datos['lista_almacen'] = $almacen->findAll();
        return view('almacen', $datos);   
}
public function datosAlmacen($idalmacen=null){
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        if (isset($_SESSION['id_tipo_usuario'])) {
        } else {
        return redirect()->route('');
        }
    } else {
        return redirect()->route('');
    }
    $almacen = new Almacen();
    $datos['almacen']=$almacen->where('id_almacen',$idalmacen)->first();
    return view('frm_actualizar_almacen',$datos);
}
public function actualizarAlmacen(){
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        if (isset($_SESSION['id_tipo_usuario'])) {
        } else {
        return redirect()->route('');
        }
    } else {
        return redirect()->route('');
    }
    $almacen = new Almacen();
    $idalmacen=$this->request->getVar('txt_idalmacen');
    $idtalmacen=$this->request->getVar('txt_idtalmacen');
    $nombre=$this->request->getVar('txt_nombre');
    $direccion=$this->request->getVar('txt_direccion');
    $telefono=$this->request->getVar('txt_telefono');
    $datos=['id_tipo_almacen'=>$idtalmacen,'nombre'=>$nombre,'direccion'=>$direccion,'telefono'=>$telefono];
    $almacen->update($idalmacen,$datos);
    $datos['lista_almacen'] = $almacen->findAll();
    return view('almacen', $datos);  
}
public function eliminarAlmacen($idalmacen){
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        if (isset($_SESSION['id_tipo_usuario'])) {
        } else {
        return redirect()->route('');
        }
    } else {
        return redirect()->route('');
    }
    $almacen = new Almacen();
    $almacen->delete($idalmacen);
    $datos['lista_almacen'] = $almacen->findAll();
    return view('almacen', $datos); 
}
}