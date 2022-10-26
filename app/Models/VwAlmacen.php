<?php 
namespace App\Models;

use CodeIgniter\Model;

class VwAlmacen extends Model{
    protected $table      = 'vw_almacenes';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $allowedFields=["id_almacen ","tipo_almacen","nombre","direccion","telefono","email"];
}