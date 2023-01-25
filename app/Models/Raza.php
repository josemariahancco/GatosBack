<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;
    protected $guarded=[];
    //relacion una raza tiene muchos gatos
    public function gatos(){

        return $this->hasMany(Gato::class);
    }
}
