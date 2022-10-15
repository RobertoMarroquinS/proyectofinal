<?php 
namespace App\Models;

use CodeIgniter\Model;

class Tproducto extends Model{
    protected $table      = 'tipos_productos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_tipo_producto';
    protected $allowedFields=['id_tipo_producto','nombre'];
}