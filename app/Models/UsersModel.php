<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['email', 'password', 'btc_address', 'btc_public', 'btc_private', 'eth_address', 'eth_public', 'eth_private', 'status'];
}