<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';

    protected $primaryKey = 'admin_id';

    protected $allowedFields = [

        'admin_id',
        'username',
        'password',
        'fullname',
        'email'

    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;
}