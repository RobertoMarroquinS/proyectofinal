<?php 
namespace App\Models;

use CodeIgniter\Model;

class Venta extends Model{
    protected $table      = 'venta';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_venta';
    protected $allowedFields=['id_venta','id_cliente','id_usuario','fecha','no_factura'];

}