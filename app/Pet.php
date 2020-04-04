<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
protected $table="pets";
protected $fillable=["titulo","email_master","especie","edad","peso","direccion","description","imagen"];
}
