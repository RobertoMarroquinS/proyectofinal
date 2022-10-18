<?php 
namespace App\Models;

use CodeIgniter\Model;

class Dventa extends Model{
    protected $table      = 'detalle_venta';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'correlativo';
    protected $allowedFields=['correlativo','id_inventario','cantidad','precio','id_venta'];
}