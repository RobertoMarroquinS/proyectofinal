<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Tproducto;
class Tproductos extends Controller
{
    public function verTproducto()
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $tproducto = new Tproducto();
        $datos['lista_tproducto'] = $tproducto->findAll();
        return view('tipoproducto', $datos);
    }
    public function agregarTproducto()
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $idtproducto = $this->request->getVar('txt_idtproducto');
        $nombre = $this->request->getVar('txt_nombre');
        $datos = ['id_tipo_producto' => $idtproducto, 'nombre' => $nombre];
        $tproducto = new Tproducto();
        $tproducto->insert($datos);
        $datos['lista_tproducto'] = $tproducto->findAll();
        return view('tipoproducto', $datos);
    }
    public function datosTproducto($idtproducto = null)
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $tproducto = new Tproducto();
        $datos['tipoproductos'] = $tproducto->where('id_tipo_producto', $idtproducto)->first();
        return view('frm_actualizar_tproducto', $datos);
    }
    public function actualizarTproducto()
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $tproducto = new Tproducto();
        $idtproducto=$this->request->getVar('txt_idtproducto');
        $nombre=$this->request->getVar('txt_nombre');
        $datos=['nombre'=>$nombre];
        $tproducto->update($idtproducto,$datos);
        $datos['lista_tproducto'] = $tproducto->findAll();
        return view('tipoproducto', $datos);


    }
    public function eliminarTproducto($idtproducto)
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $tproducto = new Tproducto();
        $tproducto->delete($idtproducto);
        $datos['lista_tproducto'] = $tproducto->findAll();
        return view('tipoproducto', $datos);
    }
}