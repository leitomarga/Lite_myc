<?php

namespace App\Controllers;
use App\Models\Lite;
use Firebase\JWT\JWT;


class Casa extends BaseController
{

    public function casa()
{  
    $idUsuario = session('id_users');
    $casa = new \App\Models\Casa();
    $habitaciones = $casa->getCasa($idUsuario);

    $data = ['habitaciones' => $habitaciones];

    if (empty($habitaciones)) {
        $data['mensaje'] = 'No hay Casas.';
    }

    return view('casa/index2', $data);   
}

public function Habitacion()
{
    $idUsuario = session('id_users');
    $casa = new \App\Models\Habitacion();
    $habitaciones = $casa->getHabitacion($idUsuario);

    $data = ['habitaciones' => $habitaciones];

    if (empty($habitaciones)) {
        $data['mensaje'] = 'No hay habitaciones.';
    }

    return view('casa/index', $data);   
}

    public function casaCrear()
    {
        return view('casa/crear');
        
    }

    public function guardarCasa()
    {
        $id_users = $this->request->getPost('idUsuario');
        $nombre = $this->request->getPost('nombre_habitacion');
    
        $casaModel = new \App\Models\Casa();
        $casas = $casaModel->getCasa($id_users);
    
        $id_habitacion = null;
    
        // Verifica si hay al menos una casa en el resultado
        if (!empty($casas)) {
            $id_habitacion = $casas[0]->id_habitacion;
        }
    
        $data = [
            'id_users' => $id_users,
            'nombre' => $nombre,
            'id_habitacion' => $id_habitacion,
        ];
    
        $casaModel->insert($data);
    
        $habitaciones = $casaModel->getCasa($id_users);
    
        $data['habitaciones'] = $habitaciones;
    
        if (empty($habitaciones)) {
            $data['mensaje'] = 'No hay casas vinculadas.';
        }
    
        // Pasa el id_habitacion a la vista
        $data['id_habitacion'] = $id_habitacion;
    
        // Puedes pasar $data a la vista y utilizar $id_habitacion en tu formulario
        return view('casa/index2', $data);
    }

    public function guardarHabitacion()
    {

        $id_users = $this->request->getPost('idUsuario');
        $nombre = $this->request->getPost('nombre_habitacion');
        $color = $this->request->getPost('color_habitacion');

        $data = array(
            'id_users' => $id_users,
            'nombre' => $nombre,
            'color' => $color
        );

        $casa = new \App\Models\Habitacion();

        $casa->insert($data);

        $casa = new \App\Models\Habitacion();
        $habitaciones = $casa->getHabitacion($id_users);
        
        $data = ['habitaciones' => $habitaciones];
    
        if (empty($habitaciones)) {
            $data['mensaje'] = 'No hay habitaciones disponibles.';
        }

        return redirect()->to('casa');

    }

    public function editar($idCasa)
    {
        $idUsuario = session('id_users');
        $data['idCasa'] = $idCasa;

        $casa = new \App\Models\Habitacion();
        $consulta = $casa->getCasa($idCasa, $idUsuario);

        if(empty($consulta))
        {
            return redirect()->to('casa/index')->with('mensaje', 'No tenés permiso para editar esta casa.');
        }
        else{

            $datosVista = [
                'data' => $data,
                'consulta' => $consulta
            ];
    
            return view('casa/editar', $datosVista);
    
        }        
    }

    public function update($idCasa)
    {
         
         $nuevoNombre = $this->request->getPost('nombre_habitacion');
         $nuevoColor = $this->request->getPost('color_habitacion');
 
         $casa = new \App\Models\Habitacion();
         $casa->updateNombre($idCasa, $nuevoNombre);
         $casa->updateColor($idCasa, $nuevoColor);

         return redirect()->to('casa');
    }

    public function eliminar($idCasa)
    {
        $idUsuario = session('id_users');

        $casa = new \App\Models\Habitacion();
        $consulta = $casa->getEliminar($idCasa, $idUsuario);

        if (empty($consulta)) {
            return redirect()->to('casa/index')->with('mensaje', 'No se pudo eliminar esta casa.');
        }
        else
        {
            $casa->eliminar($idCasa);

            return redirect()->to('casa');
        }
    }

}

?>