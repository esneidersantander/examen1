<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    public $timestamps = false;
    public $fillable =['semestre','paralelo'];
}
