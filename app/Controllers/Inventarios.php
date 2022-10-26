<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Inventario;
use App\Models\VwInventario;
class Inventarios extends Controller
{
    public function verInventario()
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
        $inventario = new VwInventario();
        $datos['lista_inventario'] = $inventario->findAll();
        return view('inventario', $datos);
    }
    public function agregarInventario()
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
        $idinventario = $this->request->getVar('txt_idinventario');
        $idproducto = $this->request->getVar('txt_idproducto');
        $idalmacen = $this->request->getVar('txt_idalmacen');
        $existencia = $this->request->getVar('txt_existencia');
        $fecha = $this->request->getVar('txt_fecha');
        $datos = ['id_inventario' => $idinventario, 'id_producto' => $idproducto, 'id_almacen' => $idalmacen, 'cantidad_existencia' => $existencia, 'fecha' => $fecha];
        $inventario = new Inventario();
        $inventario->insert($datos);
        $datos['lista_inventario'] = $inventario->findAll();
        return redirect()->route('inventario');
    }
    public function datosInventario($idinventario = null)
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
        $inventario = new Inventario();
        $datos['inventario'] = $inventario->where('id_inventario', $idinventario)->first();
        return view('frm_actualizar_inventario', $datos);
    }
    public function actualizarInventario()
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
        $idinventario = $this->request->getVar('txt_idinventario');
        $idproducto = $this->request->getVar('txt_idproducto');
        $idalmacen = $this->request->getVar('txt_idalmacen');
        $existencia = $this->request->getVar('txt_existencia');
        $fecha = $this->request->getVar('txt_fecha');
        $datos = ['id_producto' => $idproducto, 'id_almacen' => $idalmacen, 'cantidad_existencia' => $existencia, 'fecha' => $fecha];
        $inventario = new Inventario();
        $inventario->update($idinventario, $datos);
        $datos['lista_inventario'] = $inventario->findAll();
        return redirect()->route('inventario');
    }
    public function eliminarInventario($idinventario)
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
        $inventario = new Inventario();
        $inventario->delete($idinventario);
        $datos['lista_inventario'] = $inventario->findAll();
        return redirect()->route('inventario');
    }
}
