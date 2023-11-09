<?php

namespace App\Controllers;
use App\Models\Lite;
use App\Libraries\Hash;
use Config\Services;


class Home extends BaseController
{
    private $usuario;

    public function __construct()
    {
        //$this->session = \Config\Services::session();
    }


    public function index()
    {
        return view('inicio');
    }

    public function registrar()
    {
        $users = new Lite();
        //$data['persona'] = $users->findAll();
        return view('formulario/form');
    }

    public function prueba()
    {
        helper('cookie');
        $users = new \App\Models\Lite();
        //$encrypter = \Config\Services::encrypter();
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Debe ingresar su email',
                    'valid_email' => 'El email no es válido'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[10]|max_length[15]|matches[password]',
                'errors' => [
                    'required' => 'Debe ingresar su contraseña',
                    'min_length' => 'La contraseña es corta, mínimo 10 caracteres',
                    'max_length' => 'La contraseña es larga, máximo quince caracteres',
                    'matches[password]' => 'Contraseña incorrecta'
                ]
            ],
            'name' => [
                'rules' => 'required|max_length[30]',
                'errors' => [
                    'required' => 'Debe ingresar su nombre',
                    'max_length' => 'El nombre no debe exceder los 30 caracteres'
                ]    
            ]
        ]); 

        
        $email = $this->request->getPost('email');
        $usuario = $users->where('email', $email)->first();

        if ($usuario !== null) {
            $data['validar']['email'] = 'El email está en uso';
           return view('formulario/form', $data);
        }

        if(!$validation){
            $data['validar'] = $this->validator->getErrors();
           return view('formulario/form', $data);
        }else{
            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            
        $data=[
            "name" => $name,
            "email" => $email,
            "password" => password_hash($password, PASSWORD_DEFAULT)
              ];
              
        $users->insert($data);

        return redirect()->route('login')->with('msg', 'el usuario fue registrado con exito, inicie sesion');
        }

        }
}
    


/*sacar id de un usuario por email
$email = session('email');
$usuario = $users->where('email', $email)->first();

if ($usuario !== null) {
    $idUsuario = $usuario->id_users;
    echo $idUsuario;
} else {
    echo "No se encontró el ID del usuario";
}*/