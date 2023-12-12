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
    $consulta = $casa->getCasa($idUsuario);

    $data['casas'] = $consulta;

    if (empty($consulta)) {
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
        $idUsuario = $this->request->getPost('idUsuario');
        $nombre = $this->request->getPost('nombre_habitacion');
    
        $casa = new \App\Models\Casa();
    
        $data = [
            'id_users' => $idUsuario,
            'nombre' => $nombre,
        ];
        
        $casa->insert($data);
        
        $consulta = $casa->getCasa($idUsuario);
    
        $data['casas'] = $consulta;
    
        if (empty($consulta)) {
            $data['mensaje'] = 'No hay Casas.';
        }
    
        return view('casa/index2', $data);
    }

    /*public function guardarHabitacion()
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

    }*/

    public function editar($idCasa)
    {
        $idUsuario = session('id_users');
        $data['idCasa'] = $idCasa;

        $casa = new \App\Models\Casa();
        $consulta = $casa->getEditar($idCasa, $idUsuario);

        if(empty($consulta))
        {
            echo "mal"; 
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
         $idUsuario = session('id_users');
         $nuevoNombre = $this->request->getPost('nombre_habitacion');
 
         $casa = new \App\Models\Casa();
         $casa->updateNombre($idCasa, $nuevoNombre);

         $consulta = $casa->getCasa($idUsuario);
    
        $data['casas'] = $consulta;
    
        if (empty($consulta)) {
            $data['mensaje'] = 'No hay Casas.';
        }
    
        return view('casa/index2', $data);
    }

    public function eliminar($idCasa)
    {
        $idUsuario = session('id_users');

        $casa = new \App\Models\Casa();
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