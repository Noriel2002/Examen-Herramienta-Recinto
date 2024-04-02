<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Actividad extends Model
{
    protected $fillable = [
        'name',
        'description',
        'dia',
        'horario',
    ];

    public function animals()
    {
        return $this->hasMany('App\Models\Animal','actividad_id');
    }
}
