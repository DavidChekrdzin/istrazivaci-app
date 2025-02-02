<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScienceProject extends Model
{
    protected $fillable = ['name','description'];
    /** @use HasFactory<\Database\Factories\ScienceProjectFactory> */
    use HasFactory;

    public function scientists()
    {
        return $this->hasMany(Scientist::class);
    }
}
