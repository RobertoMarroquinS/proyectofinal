<?php 
namespace App\Models;

use CodeIgniter\Model;

class VwTrabajador extends Model{
    protected $table      = 'vw_usuarios';
    // Uncomment below if you want add primary key
    //protected $primaryKey = 'id_usuario';
    protected $allowedFields=['id_usuario','nombre','apellido','celular','dpi','email','contrasena','id_tipo_usuario','id_almacen','tipousuario','nombrealmacen'];
}