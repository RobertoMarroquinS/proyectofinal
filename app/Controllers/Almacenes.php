<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Almacen;
class Almacenes extends Controller{
    public function verAlmacen(){
        $almacen = new Almacen();
        $datos['lista_almacen'] = $almacen->findAll();
        return view('almacen', $datos);            
    }
    public function agregarAlmacen(){
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
    $almacen = new Almacen();
    $datos['almacen']=$almacen->where('id_almacen',$idalmacen)->first();
    return view('frm_actualizar_almacen',$datos);
}
public function actualizarAlmacen(){
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
    $almacen = new Almacen();
    $almacen->delete($idalmacen);
    $datos['lista_almacen'] = $almacen->findAll();
    return view('almacen', $datos); 
}
}