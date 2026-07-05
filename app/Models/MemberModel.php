<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'member';

    protected $primaryKey = 'member_id';

    protected $allowedFields = [

        'member_id',

        'plan_id',

        'payment_id',

        'full_name',

        'ic_number',

        'phone_number',

        'email',

        'password',

        'gender',

        'registration_date',

        'membership_status'

    ];

    protected $returnType = 'array';

    protected $useTimestamps = false;
}