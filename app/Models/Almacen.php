<?php 
namespace App\Models;

use CodeIgniter\Model;

class Almacen extends Model{
    protected $table      = 'almacenes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_almacen';
    protected $allowedFields=['id_almacen','nombre','direccion','telefono','id_tipo_almacen'];
}