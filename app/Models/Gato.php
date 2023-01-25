<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{
    use HasFactory;
    protected $guarded=[];
    //relacion un gato pertenece a una raza
    public function raza(){

        return $this->belongsto(Raza::class);
    }
    //protected $fillable=[
   //     'id_raza','nama','gender'
   // ]
}
