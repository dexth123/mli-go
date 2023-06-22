<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'Master';
    protected $primaryKey = 'No.Hp';
    protected $allowedFields = ['No.Hp', 'Nama Lengkap', 'Alamat', 'Username', 'Password'];
}


