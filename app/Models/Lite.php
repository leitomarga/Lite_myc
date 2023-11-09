<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;

class Lite extends Model{

    protected $table= 'users';
    protected $primaryKey= 'id_users';
    protected $allowedFields= ['name', 'email', 'password'];

    //sacar el nombre de usuario
    public function getUser($id)
    {
        $user = $this->find($id);

    if ($user) {
        return $user['name'];
        }
    return null;
    }

    
}
?>