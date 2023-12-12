<?php
namespace App\Controllers;
use App\Models\Lite;
Class Habitacion extends Basecontroller{

    public function index($idCasa)
    {
        $data['idCasa'] = $idCasa;
        $habitacion = new \App\Models\Habitacion();
        $consulta = $habitacion->getHabitacion($idCasa);

        $data['habitaciones'] = $consulta;

        if (empty($consulta)) {
            $data['mensaje'] = 'No hay habitaciones.';
        }

        return view('casa/index', $data);   
    }

    public function crearHabitacion($idCasa)
    {
        $data['idCasa'] = $idCasa;
        return view('habitacion/crear', $data);
    }

    public function agregarHabitacion()
    {
        $idCasa = $this->request->getPost('idCasa');
        $idUsuario = $this->request->getPost('idUsuario');
        $nombreHabitacion = $this->request->getPost('nombre_habitacion'); 
        $colorHabitacion = $this->request->getPost('color_habitacion');

        $habitacion = model('App\Models\Habitacion');

        $data = [ 
                'id_casa' => $idCasa,
                'id_users' => $idUsuario,
                'nombre' => $nombreHabitacion,
                'color' => $colorHabitacion,
        ];

        $habitacion->insert($data);

        print_r($data);
    }

}
?>