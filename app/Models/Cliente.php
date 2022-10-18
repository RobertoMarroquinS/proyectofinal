<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cliente extends Model{
    protected $table      = 'clientes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_cliente';
    protected $allowedFields=['id_cliente','nombre','apellido','nit','direccion','telefono'];
}