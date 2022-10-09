<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Talmacen;
class Talmacenes extends Controller{
    public function verTalmacen(){
        $talmacen = new Talmacen();
        $datos['lista_talmacen'] = $talmacen->findAll();
        return view('tipoalmacen', $datos);            
    }
    public function agregarTalmacen(){
        $idtalmacen=$this->request->getVar('txt_idtalmacen');
        $nombre=$this->request->getVar('txt_nombre');
        $datos=['id_tipo_almacen'=>$idtalmacen,'nombre'=>$nombre];
        $talmacen = new Talmacen();
        $talmacen->insert($datos);
        $datos['lista_talmacen'] = $talmacen->findAll();
        return view('tipoalmacen', $datos); 
}
public function datosTalmacen($idtalmacen=null){
    $talmacen = new Talmacen();
    $datos['talmacen']=$talmacen->where('id_tipo_almacen',$idtalmacen)->first();
    return view('frm_actualizar_talmacen',$datos);
}
public function actualizarTalmacen(){
    $talmacen = new Talmacen();
    $idtalmacen=$this->request->getVar('txt_idtalmacen');
    $nombre=$this->request->getVar('txt_nombre');
    $datos=['nombre'=>$nombre];
    $talmacen->update($idtalmacen,$datos);
    $datos['lista_talmacen'] = $talmacen->findAll();
    return view('tipoalmacen', $datos);
}

public function eliminarTalmacen($idtalmacen){
    $talmacen = new Talmacen();
    $talmacen->delete($idtalmacen);
    $datos['lista_talmacen'] = $talmacen->findAll();
    return view('tipoalmacen', $datos);
}
}