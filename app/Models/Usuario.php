<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model{
    protected $table      = 'proyectofinal2022';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_usuario';
    protected $allowedFields=['id_usuario','nombre','apellido','celular','dpi','email','contraseña','id_tipo_usuario','id_almacen '];
}
