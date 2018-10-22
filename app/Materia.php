<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;

class Materia extends Model
{
    protected $fillable = ['user_id', 'materia', 'seccion', 'crn', 'salon'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function alumnos(){      //10/10/18
        //return $this->belongsToMany(Alumno::class) ;
        return $this->belongsToMany(Alumno::class)->withPivot('test');
    }
}
