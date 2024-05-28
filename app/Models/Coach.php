<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $table = "coach";
    protected $primaryKey = 'id';

    protected $fillable = ['prenom', 'domaine', 'image_name', 'description'];
}
