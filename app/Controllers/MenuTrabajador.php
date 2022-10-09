<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MenuTrabajador extends Controller
{
    public function verMenu()
    {
        session_start();
        if (isset($_SESSION['id_usuario'])) {
            if (isset($_SESSION['id_tipo_usuario'])) {
                if($_SESSION['id_tipo_usuario']!=2){
                    return redirect()->route('');
                }
            } else {
            return redirect()->route('');
            }
        } else {
            return redirect()->route('');
        }
    return view('menutrabajador');
    }
}
