<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignatura
 *
 * @property $id
 * @property $nombres
 * @property $creditos
 * @property $docente
 * @property $prerrequisito
 * @property $horasTA
 * @property $horasTD
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignatura extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','creditos','docente','prerrequisito','horasTA','horasTD'];



}
