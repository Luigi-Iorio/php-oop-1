<?php

// definizione classe movie
class Movie
{
    // variabili di istanza
    public $nome;
    public $durata;
    public $genere;
    public $anno;

    // definizione costruttore
    function __construct($nomeFilm, $durataFilm, $genereFilm, $annoFilm)
    {
        $this->nome = $nomeFilm;
        $this->arrotondaDurata($durataFilm);
        $this->genere = $genereFilm;
        $this->anno = $annoFilm;
    }

    // definizione metodo
    public function arrotondaDurata($durataFilm)
    {
        // se la durata è un numero decimale
        if (is_float($durataFilm) === true) {
            $this->durata = round($durataFilm); //arrotonda la durata in un numero intero
            return $this->durata;
        };
    }
};


// istanza di due oggetti
$unaNotteDaLeoni = new Movie("Una Notte Da Leoni", 1.39, "Commedia", 2009);
$unaNotteDaLeoniDue = new Movie("Una Notte Da Leoni Due", 1.41, "Commedia", 2011);

// stampa in pagina
// una notte da leoni
echo "Il titolo del film è: " . $unaNotteDaLeoni->nome;
echo "<br>";
echo "La durata arrotondata del film è: " . $unaNotteDaLeoni->durata;
echo "<br>";
echo "Il genere del film è: " . $unaNotteDaLeoni->genere;
echo "<br>";
echo "L'anno di pubblicazione del film è: " . $unaNotteDaLeoni->anno;
echo "<hr>";
// una notte da leoni due
echo "Il titolo del film è: " . $unaNotteDaLeoniDue->nome;
echo "<br>";
echo "La durata arrotondata del film è: " . $unaNotteDaLeoniDue->durata;
echo "<br>";
echo "Il genere del film è: " . $unaNotteDaLeoniDue->genere;
echo "<br>";
echo "L'anno di pubblicazione del film è: " . $unaNotteDaLeoniDue->anno;
