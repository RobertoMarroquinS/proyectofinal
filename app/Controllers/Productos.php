<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
class Productos extends Controller{
    public function verproducto()
    {
        $producto = new Producto();
        $datos['lista_producto'] = $producto->findAll();
        return view('producto', $datos);
    }
    public function agregarProducto()
    {
        $idproducto = $this->request->getVar('txt_idproducto');
        $idtproducto = $this->request->getVar('txt_idtproducto');
        $descripcion = $this->request->getVar('txt_descripcion');
        $punidad = $this->request->getVar('txt_punidad');
        $datos = ['id_producto' => $idproducto, 'id_tipo_producto'=>$idtproducto, 'descripcion'=>$descripcion, 'precio_unidad'=>$punidad];
        $producto = new Producto();
        $producto->insert($datos);
        $datos['lista_producto'] = $producto->findAll();
        return view('producto', $datos);
    }
    public function datosproducto($idproducto = null)
    {
        $producto = new Producto();
        $datos['productos'] = $producto->where('id_producto', $idproducto)->first();
        return view('frm_actualizar_producto', $datos);
    }    
    public function actualizarproducto()
    {
        $producto = new Producto();
        $idproducto = $this->request->getVar('txt_idproducto');
        $idtproducto = $this->request->getVar('txt_idtproducto');
        $descripcion = $this->request->getVar('txt_descripcion');
        $punidad = $this->request->getVar('txt_punidad');
        $datos = ['id_tipo_producto' => $idtproducto,'descripcion'=>$descripcion,'precio_unidad'=>$punidad];
        $producto->update($idproducto,$datos);
        $datos['lista_producto'] = $producto->findAll();
        return view('producto', $datos);
    }

    public function eliminarproducto($idproducto)
    {
        $producto = new Producto();
        $producto->delete($idproducto);
        $datos['lista_producto'] = $producto->findAll();
        return view('producto', $datos);
    }

}