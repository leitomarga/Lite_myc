<?php

namespace App\Controllers;
use App\Models\Lite;
use Firebase\JWT\JWT;


class Casa extends BaseController
{

    public function index()
{
    $idUsuario = session('id_users');
    $casa = new \App\Models\Casa();
    $habitaciones = $casa->getHabitacion($idUsuario);

    $data = ['habitaciones' => $habitaciones];

    if (empty($habitaciones)) {
        $data['mensaje'] = 'No hay habitaciones.';
    }

    return view('casa/index', $data);   
}

    public function casa()
    {
        return view('casa/crear');
        
    }

    public function habitacion()
    {

        $id_users = $this->request->getPost('idUsuario');
        $nombre = $this->request->getPost('nombre_habitacion');
        $color = $this->request->getPost('color_habitacion');

        $data = array(
            'id_users' => $id_users,
            'nombre' => $nombre,
            'color' => $color
        );

        $casa = new \App\Models\Casa();

        $casa->insert($data);

        $casa = new \App\Models\Casa();
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

        $casa = new \App\Models\Casa();
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
 
         $casa = new \App\Models\Casa();
         $casa->updateNombre($idCasa, $nuevoNombre);
         $casa->updateColor($idCasa, $nuevoColor);

         return redirect()->to('casa');
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