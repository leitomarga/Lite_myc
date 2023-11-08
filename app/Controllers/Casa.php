<?php

namespace App\Controllers;
use App\Models\Lite;
use Firebase\JWT\JWT;


class Casa extends BaseController
{

    public function __construct()
    {
        //$this->session = \Config\Services::session();
    }


    public function index()
    {
            //session = session();

        $casa = new \App\Models\Casa();
    /*$idUsuario =  $_GET['idUsuario'];
        $casas = $casa->where('id_users', $idUsuario)->findAll();
        $data['casas'] = $casas;
        $data['noHabitaciones'] = empty($casas);
        $idPrueba = session()->get();
        var_dump( $idPrueba);
        return view('casa/index', $data);*/
        echo var_dump(session()->get());
        /*if (session()->logged_in==true) {
            $data['idUsuario'] = session('id_users');
            $data['email'] = session('email');

            return view('casa/index', $data);
        } else {
            echo "No";
        }*/

        
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