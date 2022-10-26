<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Traslado;
use App\Models\VwTraslado;

class Traslados extends Controller
{
    public function verTraslado()
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
        $traslado = new VwTraslado();
        $datos['lista_traslado'] = $traslado->findAll();
        return view('traslado', $datos);
    }
    public function agregarTraslado()
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
        $idtraslado = $this->request->getVar('txt_traslado');
        $fecha = $this->request->getVar('txt_fecha');
        $idinventario = $this->request->getVar('txt_idinventario');
        $adestino = $this->request->getVar('txt_adestino');
        $cantidad = $this->request->getVar('txt_cantidad');
        $idusuario = $this->request->getVar('txt_idusuario');
        $datos = ['id_traslado' => $idtraslado, 'fecha' => $fecha, 'id_inventario' => $idinventario, 'id_almacen' => $adestino, 'cantidad' => $cantidad, 'id_usuario' => $idusuario];
        $traslado = new Traslado();
        $traslado->insert($datos);
        $datos['lista_traslado'] = $traslado->findAll();
        return redirect()->route('traslado');
    }
    public function datosTraslado($idtraslado = null)
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
        $traslado = new Traslado();
        $datos['traslados'] = $traslado->where('id_traslado', $idtraslado)->first();
        return view('frm_actualizar_traslado', $datos);
    }
    public function actualizarTraslado()
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
        $idtraslado = $this->request->getVar('txt_traslado');
        $fecha = $this->request->getVar('txt_fecha');
        $idinventario = $this->request->getVar('txt_idinventario');
        $adestino = $this->request->getVar('txt_adestino');
        $cantidad = $this->request->getVar('txt_cantidad');
        $idusuario = $this->request->getVar('txt_idusuario');
        $datos = ['fecha' => $fecha, 'id_inventario' => $idinventario, 'id_almacen' => $adestino, 'cantidad' => $cantidad, 'id_usuario' => $idusuario];
        $traslado = new Traslado();
        $traslado->update($idtraslado, $datos);
        $datos['lista_traslado'] = $traslado->findAll();
        return redirect()->route('traslado');
    }
    public function eliminarTraslado($idtraslado)
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
        $traslado = new Traslado();
        $traslado->delete($idtraslado);
        $datos['lista_traslado'] = $traslado->findAll();
        return redirect()->route('traslado');
    }
}
