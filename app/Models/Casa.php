<?php 
namespace App\Models;

use CodeIgniter\Model;

class Casa extends Model{

    protected $table= 'casa';
    protected $primaryKey= 'id_casa';
    protected $allowedFields= ['id_users', 'nombre', 'color'];


    public function getHabitacion($idUsuario)
    {
        $builder = $this->db->table($this->table);

        $builder->select('*');
        $builder->where('id_users', $idUsuario);

        $query = $builder->get();

        return $query->getResult();
    }

}
?>