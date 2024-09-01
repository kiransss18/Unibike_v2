<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminsModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['fullname', 'username', 'email', 'telp_adm', 'password_hash', 'user_image'];

    protected $fillable = ['fullname', 'username', 'email', 'telp_adm', 'password_hash', 'user_image'];
}