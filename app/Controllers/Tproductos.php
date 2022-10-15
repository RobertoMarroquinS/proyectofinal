<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Tproducto;
class Tproductos extends Controller
{
    public function verTproducto()
    {
        $tproducto = new Tproducto();
        $datos['lista_tproducto'] = $tproducto->findAll();
        return view('tipoproducto', $datos);
    }
    public function agregarTproducto()
    {
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
        $tproducto = new Tproducto();
        $datos['tipoproductos'] = $tproducto->where('id_tipo_producto', $idtproducto)->first();
        return view('frm_actualizar_tproducto', $datos);
    }
    public function actualizarTproducto()
    {
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
        $tproducto = new Tproducto();
        $tproducto->delete($idtproducto);
        $datos['lista_tproducto'] = $tproducto->findAll();
        return view('tipoproducto', $datos);
    }
}