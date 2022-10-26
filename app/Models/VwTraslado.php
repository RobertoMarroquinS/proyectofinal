<?php 
namespace App\Models;

use CodeIgniter\Model;

class VwTraslado extends Model{
    protected $table      = 'vw_traslado';
    // Uncomment below if you want add primary key
    //protected $primaryKey = 'id_usuario';
    protected $allowedFields=['id_traslado','fecha','id_inventario','id_almacen','nombre_almacen','cantidad','id_usuario','nombre_usuario'];
}