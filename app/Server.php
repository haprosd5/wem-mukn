<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $connection = 'mysql';
    public $table="server";
}
