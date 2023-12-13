<?php
namespace App\Controllers;
use App\Models\Lite;
Class Habitacion extends Basecontroller{

    public function index($idCasa)
    {
        $data['idCasa'] = $idCasa;
        $idUsuario = session('id_users');

        $casa = new \App\Models\Casa();
        $consulta1 = $casa->getCasa($idUsuario);

        $habitacion = new \App\Models\Habitacion();
        $consulta2 = $habitacion->getHabitacion($idCasa);

        $data['habitaciones'] = $consulta2;

        if (empty($consulta2)) {
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

        $habitacion = new \App\Models\Habitacion();
        
        $data = [ 
                'id_casa' => $idCasa,
                'id_users' => $idUsuario,
                'nombre' => $nombreHabitacion,
                'color' => $colorHabitacion,
        ];
        
        $habitacion->insert($data);

        $consulta = $habitacion->getHabitacion($idCasa);
        $data['habitaciones'] = $consulta;

        return redirect()->to(base_url('habitacion/' . $idCasa));

    }

    public function editarHabitacion($idCasa)
    {
        $idUsuario = session('id_users');
        $data['idCasa'] = $idCasa;

        $habitacion = new \App\Models\Habitacion();
        $consulta = $habitacion->getHabitacion($idCasa, $idUsuario);

        if(empty($consulta))
        {
            echo "mal"; 
        }
        else{

            $datosVista = [
                'data' => $data,
                'consulta' => $consulta
            ];
    
            
            return view('habitacion/editar', $datosVista);
    
        }        
    }

    public function updateHabitacion()
    {
        $idUsuario = session('id_users');
        $idHabitacion = $this->request->getPost('idHabitacion');
        $idCasa = $this->request->getPost('idCasa');
        $nuevoNombre = $this->request->getPost('nombre_habitacion');
        $nuevoColor = $this->request->getPost('color_habitacion');

        $habitacion = new \App\Models\Habitacion();
        $habitacion->updateHabitacion($idHabitacion, $nuevoNombre, $nuevoColor);

        $casa = new \App\Models\Habitacion();
        $consulta = $casa->getHabitacion($idCasa);

        $data['habitaciones'] = $consulta;
        $data['idCasa'] = $idCasa;

        if (empty($consulta)) {
            $data['mensaje'] = 'No hay habitaciones.';
        }

        return view('casa/index', $data);   
    }

}
?>