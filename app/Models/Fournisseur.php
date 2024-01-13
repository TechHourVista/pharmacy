<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [        
        'name',
        'tel',
        'fax',
        'address',
        'mail',
        'ice',
        'i_f',
        'cnss',
        'rc',
        'patente',
        'delege_comercial',
        'tel_delege_comercial',
        'created_by',
    ];
}
