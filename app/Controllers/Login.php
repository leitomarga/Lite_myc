<?php

namespace App\Controllers;
use App\Models\Lite;
//use Config\Services;


class Login extends BaseController
{

    //protected $session;
    protected $validation;

    public function __construct()
    {
        //$this->session = \Config\Services::session();
        $this->load->library('session');
        //$this->validation = \Config\Services::validation();
    }

    public function index()
    {
        
        return view('login');
    }

        public function verificar()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $logged = true;
    
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
                    'min_length' => 'La contraseña es corta',
                    'max_length' => 'La contraseña es larga',
                    'matches[password]' => 'Contraseña incorrecta'
                ]
            ]
        ]);

        $users = new \App\Models\Lite();

        if (!$validation) {
            $data['validar'] = $this->validator->getErrors();
            return view('login', $data);
        } else {

            $usuario = $users->where('email', $email)->first();

            if ($usuario !== null) {
                $hashedPassword = $usuario['password'];

                if (password_verify($password, $hashedPassword)){
                
                    $idUsuario = $usuario['id_users'];
                    $data['idUsuario'] = $idUsuario;
                    
                    $sessiondata = [
                        'email'     => $email,
                        'logged_in' => true,
                        'expires' => time() + 120,
                        'id_users' => $idUsuario,
                    ];
                    
                    session()->set($sessiondata); 
                      
                    if (session()->expires < time()) {

                        $this->config->expiration;
                        return redirect()->to('login/logout');

                    }else{

                        echo "chau";
                        return redirect()->to('login/nose'); 

                    }

                } else {
                    $data['validar']['password'] = "Contraseña incorrecta";
                    return view('login', $data);
                }
            } else {
                $data['validar']['email'] = "El email no existe, por favor registrese";
                return view('login', $data);
            }
        }
        if (session()->has('logged') && session('logged') === true) {
            echo "Bienvenido a la página principal";
        } else {
            $data['validar'] = $this->validator->getErrors();

        }          
    }

        public function id()
        {
            $email = session('email');
            $users = new \App\Models\Lite();
            $usuario = $users->where('email', $email)->first();

                if ($usuario !== null) {
                    $id = $usuario->id_users;
                    echo $id;
                } else {
                    echo "No se encontró el ID del usuario";
                }
                echo $email;
        }

        

        
       public function logout()
        {
            $_SESSION['logged'] = '0';
            session()->destroy();
            return view('inicio');
        }
        
        public function nose()
        {
            $users = new \App\Models\Lite();

            $id = session()->get('id_users');
            $username = $users->getUser($id);
            
            return view('login/sesion', ['username' => $username]);

        }
            
}


?>