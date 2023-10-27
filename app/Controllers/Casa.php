<?php

namespace App\Controllers;
use App\Models\Lite;
use Firebase\JWT\JWT;


class Casa extends BaseController
{

    public function index()
    {
        $casa = new \App\Models\Casa();
        $idUsuario =  $_GET['idUsuario'];
        $casas = $casa->where('id_users', $idUsuario)->findAll();
        $data['casas'] = $casas;
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

    }

    public function editar_habitacion()
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