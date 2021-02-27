<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentATM extends Model
{
    protected $connection = 'mysql';
    public $table="payment_atm";
}
