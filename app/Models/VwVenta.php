<?php 
namespace App\Models;

use CodeIgniter\Model;

class VwVenta extends Model{
    protected $table      = 'vw_venta';
    // Uncomment below if you want add primary key
    //protected $primaryKey = 'id_usuario';
    protected $allowedFields=['id_venta','id_cliente','id_usuario','nombre_cliente','nombre_usuario','fecha','no_factura'];
}