<?php

namespace Database\Seeders;

use App\Models\Destinazione;
use App\Models\Attrazione;
use Illuminate\Database\Seeder;

class AttrazioniSeeder extends Seeder
{
    public function run(): void
    {
        $lagoDiGarda = Destinazione::where('nome', 'Lago di Garda')->first();
        $trento = Destinazione::where('nome', 'Trento')->first();
        $prealpi = Destinazione::where('nome', 'Parco Naturale Regionale delle Prealpi Giulie')->first();

        Attrazione::insert([
            [
                'nome' => 'Lago di Carisolo',
                'immagine' => 'images/attrazioni/carisolo.jpg',
                'video' => '',
                'tipologia' => 'Natura',
                'descrizione' => 'Il Lago di Carisolo è un piccolo specchio d’acqua alpino incastonato tra boschi di conifere e cime granitiche, alle porte della Val Genova. Raggiungibile con una breve escursione dal paese di Carisolo, offre panorami suggestivi e un’atmosfera di quiete incontaminata. È una meta ideale per chi cerca una passeggiata rilassante immersa nella natura del Parco Naturale Adamello Brenta.',
                'destinazione_id' => $lagoDiGarda->id
            ],
            [
                'nome' => 'Tremosine sul Garda',
                'immagine' => '',
                'video' => 'video/attrazioni/tremosine.mp4',
                'tipologia' => 'Storica',
                'descrizione' => 'Tremosine sul Garda è un borgo sospeso tra cielo e acqua, affacciato su uno dei punti panoramici più spettacolari del Lago di Garda. Dalla frazione di Pieve, la vista spazia sulle acque azzurre del lago e sulle pareti rocciose che lo circondano, offrendo un colpo d’occhio mozzafiato. Tra vicoli in pietra, terrazze panoramiche e sentieri che scendono verso la riva, Tremosine regala un’esperienza che unisce natura, quiete e meraviglia paesaggistica.',
                'destinazione_id' => $lagoDiGarda->id
            ],
            [
                'nome' => 'Monte Baldo',
                'immagine' => 'https://www.veneto.info/wp-content/uploads/sites/114/monte-baldo-hd.jpg',
                'video' => '',
                'tipologia' => 'Avventura',
                'descrizione' => 'Il Monte Baldo domina il Lago di Garda con la sua lunga dorsale verde e rocciosa, offrendo panorami che abbracciano il lago, le Dolomiti e la pianura veneta. Conosciuto come il “Giardino d’Europa” per la straordinaria varietà di flora alpina e mediterranea, è una meta perfetta per escursioni, trekking e passeggiate panoramiche. Dalle sue creste, raggiungibili anche con la funivia da Malcesine, si gode una vista spettacolare che cambia a ogni passo.',
                'destinazione_id' => $lagoDiGarda->id
            ],
        ]);

        Attrazione::insert([
            [
                'nome' => 'Tovel',
                'immagine' => 'images/attrazioni/lago_di_tovel.jpg',
                'video' => '',
                'tipologia' => 'Natura',
                'descrizione' => 'Il Lago di Tovel, nel cuore del Parco Naturale Adamello Brenta, è una delle gemme più affascinanti del Trentino. Circondato da fitte foreste e imponenti pareti dolomitiche, il lago incanta per i suoi riflessi turchesi e la quiete che lo avvolge. Lungo i sentieri che lo costeggiano si incontrano numerose malghe e rifugi dove è possibile sostare, assaporare prodotti locali e immergersi pienamente nella natura incontaminata delle Dolomiti di Brenta.',
                'destinazione_id' => $trento->id
            ],
            [
                'nome' => 'Andalo',
                'immagine' => 'images/attrazioni/andalo.jpg',
                'video' => '',
                'tipologia' => 'Storica',
                'descrizione' => 'Andalo, situato sull’Altopiano della Paganella tra le Dolomiti di Brenta, è una località ideale per chi ama la montagna in ogni stagione. In estate offre sentieri panoramici, malghe accoglienti e percorsi escursionistici immersi nei boschi; in inverno si trasforma in un vivace centro sciistico con piste e impianti moderni. Il lago di Andalo e il vicino Parco Naturale Adamello Brenta completano un ambiente perfetto per chi cerca relax, natura e attività all’aria aperta.',
                'destinazione_id' => $trento->id
            ],
            [
                'nome' => 'Molveno',
                'immagine' => 'https://melinda.it/wp-content/uploads/2019/11/mercato-melindatrentina-1.jpg',
                'video' => '',
                'tipologia' => 'Avventura',
                'descrizione' => 'L’itinerario tra i terreni della Melinda, nelle valli intorno a Trento, è un viaggio avventuroso nel cuore della tradizione trentina. Tra filari ordinati di meli e profumi di montagna, il percorso conduce alla scoperta dei segreti della coltivazione e della raccolta delle celebri mele Melinda. Lungo il cammino si possono visitare frutteti, antichi masi e piccoli borghi agricoli, vivendo un’esperienza immersiva che unisce natura, gusto e cultura contadina.',
                'destinazione_id' => $trento->id
            ],
        ]);

        Attrazione::insert([
            [
                'nome' => 'Fiume Isonzo',
                'immagine' => 'images/attrazioni/fiume.jpg',
                'video' => '',
                'tipologia' => 'Natura',
                'descrizione' => 'Il fiume Isonzo, dalle acque incredibilmente turchesi, scorre tra le vallate alpine al confine tra Italia e Slovenia, offrendo paesaggi di rara bellezza. Lungo il suo corso si alternano gole spettacolari, ponti sospesi e sentieri immersi nella natura, perfetti per escursioni, rafting e fotografia. Simbolo di storia e libertà, l’Isonzo è oggi una meta ideale per chi vuole vivere un’avventura tra montagne, boschi e il canto limpido del suo fiume di smeraldo.',
                'destinazione_id' => $prealpi->id
            ],
            [
                'nome' => 'Tarvisio',
                'immagine' => 'https://www.montagnaestate.it/wp-content/uploads/monte-lussari-tarvisio-in-estate-e1711819260947-1200x573.jpg',
                'video' => '',
                'tipologia' => 'Storica',
                'descrizione' => 'Tarvisio, incastonata tra le Alpi Giulie al confine con Austria e Slovenia, è una meta che unisce natura selvaggia e cultura mitteleuropea. Circondata da foreste, laghi e vette imponenti, offre sentieri escursionistici spettacolari e panorami mozzafiato in ogni stagione. Tra malghe, pascoli e tradizioni alpine, Tarvisio regala un’esperienza autentica, ideale per chi cerca avventura, tranquillità e un contatto profondo con la montagna.',
                'destinazione_id' => $prealpi->id
            ],
            [
                'nome' => 'Monte Canin',
                'immagine' => 'images/attrazioni/parco.jpg',
                'video' => '',
                'tipologia' => 'Avventura',
                'descrizione' => 'Il Monte Canin, nel cuore del Parco Naturale delle Prealpi Giulie, domina con le sue imponenti pareti calcaree il paesaggio tra Sella Nevea e il Foro del Canin. È una meta ambita dagli escursionisti e dagli amanti della montagna, grazie ai panorami spettacolari che spaziano fino alla Slovenia e alle Dolomiti friulane. Tra grotte, sentieri d’alta quota e pascoli alpini, il Canin offre un’esperienza autentica e selvaggia, dove la natura mostra ancora il suo volto più puro e maestoso.',
                'destinazione_id' => $prealpi->id
            ],
        ]);
    }
}
