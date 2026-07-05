<?php

namespace App\Models;

use CodeIgniter\Model;

class MembershipPlanModel extends Model
{
    protected $table = 'membership_plan';

    protected $primaryKey = 'plan_id';

    protected $returnType = 'array';

    protected $allowedFields = [

        'plan_name',

        'duration',

        'price',

        'description'

    ];
}