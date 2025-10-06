<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attrazione extends Model
{
    use HasFactory;

    protected $table = 'attrazioni';

    protected $fillable = ['nome', 'immagine', 'video', 'tipologia', 'descrizione', 'destinazione_id'];

    public function destinazione()
    {
        return $this->belongsTo(Destinazione::class);
    }
}
