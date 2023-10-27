<?php 
namespace App\Models;

use CodeIgniter\Model;

class Casa extends Model{

    protected $table= 'casa';
    protected $primaryKey= 'id_casa';
    protected $allowedFields= ['id_users', 'nombre', 'color'];

    public function color_habitación()
    {
        
    }

}
?>