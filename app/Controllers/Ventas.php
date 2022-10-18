<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Venta;

class Ventas extends Controller
{
    public function verVenta()
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
        $venta = new Venta();
        $datos['lista_venta'] = $venta->findAll();
        return view('venta', $datos);
    }
    public function agregarVenta()
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
        $idventa = $this->request->getVar('txt_idventa');
        $idcliente = $this->request->getVar('txt_idcliente');
        $idusuario = $this->request->getVar('txt_idusuario');
        $fecha = $this->request->getVar('txt_fecha');
        $nofactura = $this->request->getVar('txt_nofactura');
        $datos = ['id_venta' => $idventa, 'id_cliente' => $idcliente, 'id_usuario' => $idusuario, 'fecha' => $fecha, 'no_factura' => $nofactura];
        $venta = new Venta();
        $venta->insert($datos);
        $datos['lista_venta'] = $venta->findAll();
        return view('venta', $datos);
    }
    public function datosVenta($idventa = null)
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
        $venta = new Venta();
        $datos['ventas'] = $venta->where('id_venta', $idventa)->first();
        return view('frm_actualizar_venta', $datos);
    }
    public function actualizarVenta()
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
        $venta = new Venta();
        $idventa = $this->request->getVar('txt_idventa');
        $idcliente = $this->request->getVar('txt_idcliente');
        $idusuario = $this->request->getVar('txt_idusuario');
        $fecha = $this->request->getVar('txt_fecha');
        $nofactura = $this->request->getVar('txt_nofactura');
        $datos = ['id_cliente' => $idcliente, 'id_usuario' => $idusuario, 'fecha' => $fecha, 'no_factura' => $nofactura];
        $venta->update($idventa, $datos);
        $datos['lista_venta'] = $venta->findAll();
        return view('venta', $datos);
    }
    public function eliminarVenta($idventa)
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
        $venta = new Venta();
        $venta->delete($idventa);
        $datos['lista_venta'] = $venta->findAll();
        return view('venta', $datos);
    }
}