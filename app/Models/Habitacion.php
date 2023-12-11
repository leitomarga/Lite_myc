<?php 
namespace App\Models;

use CodeIgniter\Model;

class Habitacion extends Model{

    protected $table= 'habitaciones';
    protected $primaryKey= 'id_habitacion';
    protected $allowedFields= ['id_chip','id_casa', 'nombre', 'color'];


    public function getHabitacion($idUsuario)
    {
        $builder = $this->db->table($this->table);

        $builder->select('*');
        $builder->where('id_users', $idUsuario);

        $query = $builder->get();

        return $query->getResult();
    }

    public function getCasa($idCasa, $idUsuario)
    {
        $builder = $this->db->table($this->table); 
        $builder->select('*');
        $builder->where('id_casa', $idCasa);
        $builder->where('id_users', $idUsuario);
        $builder->limit(1); 
    
        return $builder->get()->getRow();
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

    public function updateColor($idCasa, $nuevoColor)
    {
        $data = [
            'color' => $nuevoColor,
        ];
    
        $this->where('id_casa', $idCasa);
        $this->set($data);
        $this->update();
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

}
?>