<?php
namespace App\Models;
use CodeIgniter\Model;

class Casa extends Model{
    protected $table = 'casa';
    protected $primaryKey = 'id_casa';
    protected $allowedFields = ['id_users', 'nombre', 'id_habitacion'];      

    public function getIdHabitacion($id)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('id_users', $id);
        $builder->limit(1);
        return $builder->get()->getRow();
    }

    public function getCasa($idUsuario)
    {   
        $builder = $this->db->table($this->table); // Reemplaza 'nombre_de_tu_tabla' con el nombre real de tu tabla
        $builder->select('*');
        $builder->where('id_users', $idUsuario);
        return $builder->get()->getResult();
    }

    public function getEditar($idCasa, $idUsuario)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('id_users', $idUsuario);
        $builder->where('id_casa', $idCasa);
        return $builder->get()->getRow();
    }

    public function getEliminar($idCasa, $idUsuario)
    {
        return $this->where('id_casa', $idCasa)
                    ->where('id_users', $idUsuario)
                    ->first();
    }

    public function eliminar($idCasa)
{

    $casa = $this->find($idCasa);

    if (empty($casa)) {

        return false;
    
    }

    $this->delete($idCasa);
    
    return true; 
}

public function updateNombre($idCasa, $nuevoNombre)
{
    $data = [
        'nombre' => $nuevoNombre,
    ];

    $this->where('id_casa', $idCasa);
    $this->set($data);
    $this->update();
}   
    
}
?>