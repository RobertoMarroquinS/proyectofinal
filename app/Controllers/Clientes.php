<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cliente;
class Clientes extends Controller{
    public function verCliente(){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $cliente = new Cliente();
        $datos['lista_cliente'] = $cliente->findAll();
        return view('cliente', $datos);
    }
    public function agregarCliente(){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
    $idcliente = $this->request->getVar('txt_idcliente');
    $nombre = $this->request->getVar('txt_nombre');
    $apellido = $this->request->getVar('txt_apellido');
    $nit = $this->request->getVar('txt_nit');
    $direccion = $this->request->getVar('txt_direccion');
    $telefono = $this->request->getVar('txt_telefono');
    $datos = ['id_cliente' => $idcliente, 'nombre' => $nombre,'apellido'=>$apellido,'nit'=>$nit,'direccion'=>$direccion,'telefono'=>$telefono];
    $cliente = new Cliente();
    $cliente->insert($datos);
    $datos['lista_cliente'] = $cliente->findAll();
    return view('cliente', $datos);
    }
    public function datosCliente($idcliente=null){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $cliente = new Cliente();
        $datos['clientes'] = $cliente->where('id_cliente', $idcliente)->first();
        return view('frm_actualizar_cliente', $datos);
    }
    public function actualizarCliente(){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $cliente = new Cliente();
        $idcliente = $this->request->getVar('txt_idcliente');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $nit = $this->request->getVar('txt_nit');
        $direccion = $this->request->getVar('txt_direccion');
        $telefono = $this->request->getVar('txt_telefono');
        $datos=['nombre'=>$nombre,'apellido'=>$apellido,'nit'=>$nit,'direccion'=>$direccion,'telefono'=>$telefono];
        $cliente->update($idcliente,$datos);
        $datos['lista_cliente'] = $cliente->findAll();
        return view('cliente', $datos);
    }
    public function eliminarCliente($idcliente){
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
        $cliente = new Cliente();
        $cliente->delete($idcliente);
        $datos['lista_cliente'] = $cliente->findAll();
        return view('cliente', $datos);
    }
}