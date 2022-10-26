<?php 
namespace App\Models;

use CodeIgniter\Model;

class VwInventario extends Model{
    protected $table      = 'vw_inventarios';
    // Uncomment below if you want add primary key
    //protected $primaryKey = 'id_usuario';
    protected $allowedFields=['id_inventario','id_producto','id_almacen','cantidad_existencia','fecha','nombreprodcuto','nombrealmacen'];
}