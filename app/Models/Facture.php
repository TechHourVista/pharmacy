<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Facture extends Model
{
    protected $fillable = [
        'reglement_facture_id',
        'num_facture',
        'date_facture',
        'echeacnce',
        'start_periode',
        'fin_periode',
        'montant_facture',
        'created_by',
        'updated_at',
    ];
 
    public function reglement(): HasOne
    {
        return $this->hasOne(REGLEMENT_fACTURE::class);
    }
}
