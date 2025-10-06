<?php

namespace Database\Seeders;

use App\Models\Destinazione;
use App\Models\Attrazione;
use Illuminate\Database\Seeder;

class AttrazioniSeeder extends Seeder
{
    public function run(): void
    {
        $destinazioni = Destinazione::all();

        foreach ($destinazioni as $destinazione) {
            Attrazione::insert([
                [
                    'nome' => 'Museo principale',
                    'immagine' => 'museo.jpg',
                    'tipologia' => 'Culturale',
                    'descrizione' => 'Museo dedicato alla storia locale.',
                    'destinazione_id' => $destinazione->id
                ],
                [
                    'nome' => 'Parco centrale',
                    'immagine' => 'parco.jpg',
                    'tipologia' => 'Natura',
                    'descrizione' => 'Ampio parco con laghetto e aree verdi.',
                    'destinazione_id' => $destinazione->id
                ],
                [
                    'nome' => 'Piazza storica',
                    'immagine' => 'piazza.jpg',
                    'tipologia' => 'Storica',
                    'descrizione' => 'Centro nevralgico della città, ricco di vita.',
                    'destinazione_id' => $destinazione->id
                ]
            ]);
        }
    }
}
