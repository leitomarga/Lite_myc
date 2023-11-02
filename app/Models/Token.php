<?php
namespace App\Models;

use CodeIgniter\Model;

class Token extends Model
{
    protected $table = 'token';
    protected $primaryKey = 'id_token';
    protected $allowedFields = ['token', 'email', 'fecha'];
}
?>