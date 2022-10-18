<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Dventa;

class Dventas extends Controller
{
    public function verDventa()
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
        $dventa = new Dventa();
        $datos['lista_dventa'] = $dventa->findAll();
        return view('detalleventa', $datos);
    }

    public function agregarDventa()
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
        $correlativo = $this->request->getVar('txt_correlativo');
        $idinventario = $this->request->getVar('txt_idinventario');
        $cantidad = $this->request->getVar('txt_cantidad');
        $precio = $this->request->getVar('txt_precio');
        $idventa = $this->request->getVar('txt_idventa');
        $datos = ['correlativo' => $correlativo, 'id_inventario' => $idinventario, "cantidad" => $cantidad, 'precio' => $precio, 'id_venta' => $idventa];
        $dventa = new Dventa();
        $dventa->insert($datos);
        $datos['lista_dventa'] = $dventa->findAll();
        return view('detalleventa', $datos);
    }

    public function datosDventa($correlativo = null)
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
        $dventa = new Dventa();
        $datos['dventa'] = $dventa->where('correlativo', $correlativo)->first();
        return view('frm_actualizar_dventa', $datos);
    }

    public function actualizarDventa()
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
        $correlativo = $this->request->getVar('txt_correlativo');
        $idinventario = $this->request->getVar('txt_idinventario');
        $cantidad = $this->request->getVar('txt_cantidad');
        $precio = $this->request->getVar('txt_precio');
        $idventa = $this->request->getVar('txt_idventa');
        $datos = ['id_inventario' => $idinventario, "cantidad" => $cantidad, 'precio' => $precio, 'id_venta' => $idventa];
        $dventa = new Dventa();
        $dventa->update($correlativo, $datos);
        $datos['lista_dventa'] = $dventa->findAll();
        return view('detalleventa', $datos);
    }

    public function eliminarDventa($idcliente)
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
        $dventa = new Dventa();
        $dventa->delete($idcliente);
        $datos['lista_dventa'] = $dventa->findAll();
        return view('detalleventa', $datos);
    }
}