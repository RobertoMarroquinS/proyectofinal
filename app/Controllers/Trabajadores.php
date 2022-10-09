<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Trabajadores extends Controller{
    public function verTrabajadores(){
     $trabajador = new Usuario();
    $datos['lista_trabajador'] = $trabajador->findAll();
    return view('trabajadores',$datos);
    }
}