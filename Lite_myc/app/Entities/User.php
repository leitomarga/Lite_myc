<?php 
namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    public function generateUsername()
    {
        $this->atributes['username'] = explode(" ", $this->name)[0] . explode(" ", $this->surname)[0];
    }
}


?>