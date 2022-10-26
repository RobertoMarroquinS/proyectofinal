<?php 
namespace App\Models;

use CodeIgniter\Model;

class VwProducto extends Model{
    protected $table      = 'vw_productos';
    // Uncomment below if you want add primary key
    //protected $primaryKey = 'id_usuario';
    protected $allowedFields=['id_producto','id_tipo_producto','nombre','descripcion','precio_unidad'];
}