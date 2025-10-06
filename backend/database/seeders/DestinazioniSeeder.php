<?php

namespace Database\Seeders;

use App\Models\Destinazione;
use Illuminate\Database\Seeder;

class DestinazioniSeeder extends Seeder
{
    public function run(): void
    {
        Destinazione::insert([
            ['nome' => 'Lago di Garda', 'immagine' => 'images/attrazioni/monte-baldo.jpg', 'paese' => 'Italia', 'descrizione' => 'Il Lago di Garda è una delle mete più prelibate per le così tante possibilità escursionistiche e non solo che offre.'],
            ['nome' => 'Trento', 'immagine' => 'images/attrazioni/molveno.jpg', 'paese' => 'Italia', 'descrizione' => 'A Trento ci sono tantissimi piccoli paesini dove ospitalità e tranquillità sono le portate principali per un ottima meta. Inoltre non mancano assolutamente le vette da raggiungere per godersi ottimi paesaggi.'],
            ['nome' => 'Parco Naturale Regionale delle Prealpi Giulie', 'immagine' => 'images/attrazioni/parco.jpg', 'paese' => 'Italia', 'descrizione' => 'Il Parco naturale delle Prealpi Giulie regala paesaggi mozzafiato ed è a due passi dalla Slovenia, per una esperienza internazionale.']
        ]);
    }
}
