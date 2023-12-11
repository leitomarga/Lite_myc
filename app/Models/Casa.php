<?php
namespace App\Models;
use CodeIgniter\Model;

class Casa extends Model{
    protected $table = 'casa';
    protected $primaryKey = 'id_casa';
    protected $allowedFields = ['id_users', 'nombre', 'id_habitacion'];      

    /*public function getIdHabitacion($id)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('id_users', $id);
        $builder->limit(1);
        return $builder->get()->getRow();
    }*/

    public function getCasa($id_users)
    {   
        $builder = $this->db->table($this->table);
        $builder->select('casa.*, habitaciones.id_habitacion, habitaciones.nombre as nombre_habitacion');
        $builder->join('habitaciones', 'habitaciones.id_casa = casa.id_casa');
        $builder->where('casa.id_users', $id_users);
    
        $query = $builder->get();
    
        return $query->getResult();
    }
    
}
?>