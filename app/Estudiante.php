<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $primaryKey = 'idEstudiante';
    public $timestamps = false;
    public $fillable =['nombre','apellido','cedula','sexo','idSemestre'];
}
