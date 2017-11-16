<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'email', 'telefone'
    ];
    public function users(){
        return $this->belongsTo('App\User');
    }
}
