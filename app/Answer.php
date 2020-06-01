<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table="answers";
    protected $fillable=["respuesta1","respuesta2","respuesta3","respuesta4","respuesta5","respuesta6","respuesta7","idPet","email_user"];
}
