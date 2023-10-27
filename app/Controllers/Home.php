<?php

namespace App\Controllers;
use App\Models\Lite;
use App\Entities\User;
use App\Libraries\Hash;
use CodeIgniter\Email\Email;

class Home extends BaseController
{
    private $usuario;
    //$session = \Config\Services::session($config);
    public function __construct()
    {
        helper(['url', 'form']);
        
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
        $encrypter = \Config\Services::encrypter();
        $validation = service('validation');
        $validation -> setRules([
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|matches[password]|min_length[10]'
        ]); 
        if(!$validation){
            $data['validar'] = $this->validator->getErrors();
           return view('formulario/form', $data);
        }else{
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password'); 
            
        $data=[
            "email" => $email,
            "password" => password_hash($password, PASSWORD_DEFAULT)
              ];
              

        $users->insert($data);

        $db = \Config\Database::connect();
        $lastInsertId = $db->insertID();

        $expiracion = time() + (7 * 24 * 60 * 60);

                    $cookieEmail = [
                        'name'   => 'email',
                        'value'  => $email,
                        'expire' => $expiracion,
                        'secure' => true 
                    ];

                    $cookiePassword = [
                        'name'   => 'password',
                        'value'  => $password,
                        'expire' => $expiracion,
                        'secure' => true 
                    ];

                    $this->response->setCookie($cookieEmail);
                    $this->response->setCookie($cookiePassword);
        
        session()->set('id_users', $lastInsertId);
        session()->set('email', $email);
        session()->set('expires', time() + 120);
        


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