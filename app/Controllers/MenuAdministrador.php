<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MenuAdministrador extends Controller
{
    public function verMenu()
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
                if($_SESSION['id_tipo_usuario']!=1){
                    return redirect()->route('menutrabajador');
                }
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
    return view('menuadmin');
    }
}
