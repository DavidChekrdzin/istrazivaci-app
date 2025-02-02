<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scientist extends Model
{
    protected $fillable = ['name','age','science_project_id'];

    /** @use HasFactory<\Database\Factories\ScientistFactory> */
    use HasFactory;

    public function science_project()
    {
        return $this->belongsTo(ScienceProject::class);
    }
}
