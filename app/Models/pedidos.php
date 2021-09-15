<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    // public function relUser(){
    //     return $this->hasOne('App\Models\User','user_id','pedi_cliente');
    // }
}
