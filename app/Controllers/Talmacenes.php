<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Talmacen;
class Talmacenes extends Controller{
    public function verTalmacen(){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $talmacen = new Talmacen();
        $datos['lista_talmacen'] = $talmacen->findAll();
        return view('tipoalmacen', $datos);            
    }
    public function agregarTalmacen(){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $idtalmacen=$this->request->getVar('txt_idtalmacen');
        $nombre=$this->request->getVar('txt_nombre');
        $datos=['id_tipo_almacen'=>$idtalmacen,'nombre'=>$nombre];
        $talmacen = new Talmacen();
        $talmacen->insert($datos);
        $datos['lista_talmacen'] = $talmacen->findAll();
        return view('tipoalmacen', $datos); 
}
public function datosTalmacen($idtalmacen=null){
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        if (isset($_SESSION['id_tipo_usuario'])) {
        } else {
        return redirect()->route('');
        }
    } else {
        return redirect()->route('');
    }
    $talmacen = new Talmacen();
    $datos['talmacen']=$talmacen->where('id_tipo_almacen',$idtalmacen)->first();
    return view('frm_actualizar_talmacen',$datos);
}
public function actualizarTalmacen(){
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        if (isset($_SESSION['id_tipo_usuario'])) {
        } else {
        return redirect()->route('');
        }
    } else {
        return redirect()->route('');
    }
    $talmacen = new Talmacen();
    $idtalmacen=$this->request->getVar('txt_idtalmacen');
    $nombre=$this->request->getVar('txt_nombre');
    $datos=['nombre'=>$nombre];
    $talmacen->update($idtalmacen,$datos);
    $datos['lista_talmacen'] = $talmacen->findAll();
    return view('tipoalmacen', $datos);
}

public function eliminarTalmacen($idtalmacen){
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        if (isset($_SESSION['id_tipo_usuario'])) {
        } else {
        return redirect()->route('');
        }
    } else {
        return redirect()->route('');
    }
    $talmacen = new Talmacen();
    $talmacen->delete($idtalmacen);
    $datos['lista_talmacen'] = $talmacen->findAll();
    return view('tipoalmacen', $datos);
}
}