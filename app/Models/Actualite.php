<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;

    protected $table = "actualite";
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'content', 'image_name', 'date'];
    
}
