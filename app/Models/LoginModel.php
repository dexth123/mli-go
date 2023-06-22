<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'Login';
    protected $primaryKey = 'Username';
    protected $allowedFields = ['Username', 'Password'];
}