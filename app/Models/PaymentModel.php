<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payment';

    protected $primaryKey = 'payment_id';

    protected $returnType = 'array';

    protected $allowedFields = [

        'payment_id',

        'member_id',

        'plan_id',

        'payment_date',

        'payment_method',

        'amount',

        'payment_status'

    ];
}