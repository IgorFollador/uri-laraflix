<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmeAtor extends Model
{
    protected $table = "filme_atores";
    protected $fillable = ['filme_id', 'ator_id'];
    use HasFactory;
}
