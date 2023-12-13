<?php 
namespace App\Models;

use CodeIgniter\Model;

class Habitacion extends Model{

    protected $table= 'habitaciones';
    protected $primaryKey= 'id_habitacion';
    protected $allowedFields= ['id_chip','id_casa', 'nombre', 'color'];


    public function getHabitacion($idCasa)
    {
        $builder = $this->db->table($this->table);

        $builder->select('*');
        $builder->where('id_casa', $idCasa);

        $query = $builder->get();

        return $query->getResult();
    }

    public function updateHabitacion($idHabitacion, $nuevoNombre, $nuevoColor)
{
    $data = [
        'nombre' => $nuevoNombre,
        'color'  => $nuevoColor,
    ];

    $this->where('id_habitacion', $idHabitacion);
    $this->set($data);
    $this->update();
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