<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function users(){
        return $this->belongsTo('crudUsuario\User');
    }
}
