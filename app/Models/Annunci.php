<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annunci extends Model
{
    protected $table= 'annunci';
    protected $fillable = ['titolo','descrizione','prezzo','pubblicato_SN'];
}
