<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesory extends Model
{
    protected $table="accesories";
    protected $fillable=["email","barrio","descripcion","precio","imag","titul"];
}
