<?php 
namespace App\Models;

use CodeIgniter\Model;

class Talmacen extends Model{
    protected $table      = 'tipos_almacenes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_tipo_almacen';
    protected $allowedFields=['id_tipo_almacen','nombre'];
}