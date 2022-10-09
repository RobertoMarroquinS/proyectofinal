<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;

class Usuarios extends Controller
{
    public function iniciarSesion()
    {
        $usuario = $this->request->getVar("txtusuario");
        $contraseña = $this->request->getVar("txtpass");
        $sql = "select * from usuarios where id_usuario={$usuario} and contrasena='{$contraseña}'";
        $conexion = db_connect();
        $ejecutar = $conexion->query($sql);
        $num = $ejecutar->getNumRows();
        if ($num==1) {
            $usuario = $ejecutar->getRow(0);
            if ($usuario->id_usuario == 1) {
                return view('menuadmin');
            }
            if ($usuario->id_usuario == 2);
            return view('menutrabajador');
        } else {
            echo '<script>alert("Datos incorrectos")</script>';
            echo '<script>window.history.back()</script>';
        }

    }
}
