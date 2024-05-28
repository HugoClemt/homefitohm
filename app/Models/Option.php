<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'options';

    protected $primaryKey = 'id';

    protected $fillable = [
        'prix',
        'phone',
        'email',
        'adresse',
        'ville',
        'code_postal',
        'lundi_horaire',
        'mardi_horaire',
        'mercredi_horaire',
        'jeudi_horaire',
        'vendredi_horaire',
        'samedi_horaire',
        'dimanche_horaire'
    ];
}
