<?php

namespace App\Controllers;

use App\Models\Dispositivo;

class Api extends BaseController
{
    public function insertMac($mac)
    {
        echo $mac;
        $dispositivoModel = new Dispositivo();
        $data = ['chip' => $mac];
        $dispositivoModel->insert($data);
       
    }
}


/* $mac = var_dump($_GET['mac']);
       // $mac = $this->request->getGet('mac');
        echo "MAC recibida: " . $mac;
        
        // Cargar el modelo necesario
        $dispositivoModel = new Dispositivo();
        // Validar la dirección MAC
        if ($mac !== null) {
            // Realizar la inserción en la base de datos
            $data = ['chip' => $mac];
            
            try {
                // Wrap $data in an additional array as required by CodeIgniter 4
                $dispositivoModel->insert($data);
                 echo "Inserción exitosa";
            } catch (\Exception $e) {
                echo "Error al insertar en la base de datos: " . $e->getMessage();
            }
} else {
    echo "La dirección MAC es nula";
}*/