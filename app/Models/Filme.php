<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = "filmes";
    protected $fillable = ['nome', 'categoria'];
    use HasFactory;
}
