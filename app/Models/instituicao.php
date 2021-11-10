<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instituicao extends Model
{
    use HasFactory;

    protected $table = 'instituicaos';

    public function relUser(){
        return $this->hasMany('App\Models\User', 'user_instituicao', 'inst_id');
    }
}
