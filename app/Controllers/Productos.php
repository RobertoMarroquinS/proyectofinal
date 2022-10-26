<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
use App\Models\VwProducto;
class Productos extends Controller{
    public function verproducto()
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
        $producto = new VwProducto();
        $datos['lista_producto'] = $producto->findAll();
        return view('producto', $datos);
    }
    public function agregarProducto()
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
        $idproducto = $this->request->getVar('txt_idproducto');
        $idtproducto = $this->request->getVar('txt_idtproducto');
        $nombre = $this->request->getVar('txt_nombre');
        $descripcion = $this->request->getVar('txt_descripcion');
        $punidad = $this->request->getVar('txt_punidad');
        $datos = ['id_producto' => $idproducto, 'id_tipo_producto'=>$idtproducto, 'nombre'=>$nombre,'descripcion'=>$descripcion, 'precio_unidad'=>$punidad];
        $producto = new Producto();
        $producto->insert($datos);
        $datos['lista_producto'] = $producto->findAll();
        return redirect()->route('producto');
    }
    public function datosproducto($idproducto = null)
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
        $producto = new Producto();
        $datos['productos'] = $producto->where('id_producto', $idproducto)->first();
        return view('frm_actualizar_producto', $datos);
    }    
    public function actualizarproducto()
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
        $producto = new Producto();
        $idproducto = $this->request->getVar('txt_idproducto');
        $idtproducto = $this->request->getVar('txt_idtproducto');
        $nombre = $this->request->getVar('txt_nombre');
        $descripcion = $this->request->getVar('txt_descripcion');
        $punidad = $this->request->getVar('txt_punidad');
        $datos = ['id_tipo_producto' => $idtproducto,'nombre'=>$nombre,'descripcion'=>$descripcion,'precio_unidad'=>$punidad];
        $producto->update($idproducto,$datos);
        $datos['lista_producto'] = $producto->findAll();
        return redirect()->route('producto');
    }

    public function eliminarproducto($idproducto)
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
        $producto = new Producto();
        $producto->delete($idproducto);
        $datos['lista_producto'] = $producto->findAll();
        return redirect()->route('producto'); 
    }

}