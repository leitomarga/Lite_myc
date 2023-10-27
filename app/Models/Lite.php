<?php 
namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;

class Lite extends Model{

    protected $table= 'users';
    protected $primaryKey= 'id_users';
    protected $allowedFields= ['email', 'password'];

}
?>