<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destinazione extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'immagine', 'paese', 'descrizione'];

    public function attrazioni()
    {
        return $this->hasMany(Attrazione::class);
    }
}
