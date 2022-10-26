<?php 
namespace App\Models;

use CodeIgniter\Model;

class Traslado extends Model{
    protected $table      = 'traslado';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_traslado';
    protected $allowedFields=['id_traslado','fecha','id_inventario','id_almacen','cantidad','id_usuario'];
}