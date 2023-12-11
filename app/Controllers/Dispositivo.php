<?php
namespace App\Controllers;
use App\Models\Lite;
 Class Dispositivo extends Basecontroller{
    public function vinculacion(){
        $users = new \App\Models\Casa();
        $id = session()->get('id_users');
        $consulta =  $users->getHabitacion($id);
        $data = ['consulta' => $consulta];
        return view('vinculacion', $data);
    }
    
 }
?>