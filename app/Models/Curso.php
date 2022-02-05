<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = "cursos";

    // protected $fillable = ['name', 'description', 'categoria'];
    protected $guarded = []; // sn filiables todos los demas campos execto este


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
