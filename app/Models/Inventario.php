<?php 
namespace App\Models;

use CodeIgniter\Model;

class Inventario extends Model{
    protected $table      = 'inventarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_inventario';
    protected $allowedFields=['id_inventario','id_producto','id_almacen','cantidad_existencia','fecha'];
}