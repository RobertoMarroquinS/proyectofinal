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
            session_start();
            $_SESSION['id_usuario'] = $usuario->id_usuario;
            $_SESSION['id_tipo_usuario'] = $usuario->id_tipo_usuario;
            if ($usuario->id_tipo_usuario == 1) {
                return redirect()->route('menuadministrador');
            }
            if ($usuario->id_tipo_usuario == 2);
                return redirect()->route('menutrabajador');
        } else {
            echo '<script>alert("Datos incorrectos")</script>';
            echo '<script>window.history.back()</script>';
        }

    }
    public function cerrarSesion(){

        session_start();
        session_destroy();
        echo "entra";
        return redirect()->route('');
    }
}
