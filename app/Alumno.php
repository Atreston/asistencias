<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Materia;    //no se ocupa

class Alumno extends Model
{
    //
    protected $fillable = ['nombre', 'codigo', 'carrera'];
    public $timestamps = false; //se coloca cuando se borra el timestamps en la migración
    
    public function materias(){    //10/10/18
        return $this->belongsToMany(Materia::class);
    }
}
