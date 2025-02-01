<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scientist extends Model
{
    protected $fillable = ['name','age'];

    /** @use HasFactory<\Database\Factories\ScientistFactory> */
    use HasFactory;
}
