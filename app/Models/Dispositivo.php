<?php
namespace App\Models;

use CodeIgniter\Model;

Class Dispositivo extends Model{
    protected $table= 'dispositivos';
    protected $primaryKey= 'id_dispositivo';
    protected $allowedFields= ['chip', 'id_users', 'id_habitacion'];

   


}
?>