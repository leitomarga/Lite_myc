<?php

namespace App\Controllers;
use App\Models\Lite;


class Login extends BaseController
{

    protected $session;
    protected $validation;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        //$this->validation = \Config\Services::validation();
    }

    public function index()
    {
        
        return view('login');
    }

        public function verificar()
    {
        
        $session = session();

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
                    'min_length' => 'Contraseña incorrecta',
                    'max_length' => 'Contraseña incorrecta',
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
                //$session->set('user_id', $idUsuario);

                if (password_verify($password, $hashedPassword)){
                
                    $idUsuario = $usuario['id_users'];
                    $data['idUsuario'] = $idUsuario;

                    session()->set('id_users', $idUsuario);
                    session()->set('email', $email);
                    session()->set('expires', time() + 120);
                    //return view('login/sesion', $data);

                    if (session('expires') < time()) {
                        // La sesión ha expirado, redirige a la página de inicio de sesión o realiza alguna acción
                        return redirect()->to('login/logout');
                    }
                    else
                    {
                        return view('login/sesion', $data);
                        echo "todo bien";
                    }
                    //echo $idUsuario;
                } else {
                    $data['validar'] = $this->validator->getErrors();
            return view('login', $data);
                }
            } else {
                $data['validar'] = $this->validator->getErrors();
            return view('login', $data);
            }
                }
                if (session()->has('logged') && session('logged') === true) {
                    echo "Bienvenido a la página principal";
                } else {
                    $data['validar'] = $this->validator->getErrors();
            return view('login', $data);
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
        }

        

        
        public function logout()
        {
            $_SESSION['logged'] = '0';
            session()->destroy();
            return view('inicio');
        }
        
        public function nose()
        {
            $home = new App\Controllers\Home;
            $home->prueba($email);
            return view('login/sesion, $home');
        }
            
}


?>