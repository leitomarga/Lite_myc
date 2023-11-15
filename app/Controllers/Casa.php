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
        $data['mensaje'] = 'No hay habitaciones disponibles.';
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

    public function editar()
    {
        return view('casa/editar');
    }

    public function update()
    {
        
    }
   
}




    /*public function index()
    {
        return view('sesion/lite');
    }*/



?>