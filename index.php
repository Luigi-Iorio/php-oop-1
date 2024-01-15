<?php

// definizione classe movie
class Movie
{
    // variabili di istanza
    public $nome;
    public $durata;
    public $generi;
    public $anno;

    // definizione costruttore
    function __construct($nomeFilm, $durataFilm, $generiFilm, $annoFilm)
    {
        $this->nome = $nomeFilm;
        $this->arrotondaDurata($durataFilm);
        $this->generi = $generiFilm;
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

    // stampa generi
    public function stampaGeneri()
    {
        echo "I generi del film sono: ";
        foreach ($this->generi as $genere) {
            echo $genere . " ";
        };
    }
};


// istanza di due oggetti
$unaNotteDaLeoni = new Movie("Una Notte Da Leoni", 1.39, ["Commedia", "Irriverente"], 2009);
$unaNotteDaLeoniDue = new Movie("Una Notte Da Leoni Due", 1.41, ["Commedia", "Irriverente"], 2011);

// stampa in pagina
// una notte da leoni
echo "Il titolo del film è: " . $unaNotteDaLeoni->nome;
echo "<br>";
echo "La durata arrotondata del film è: " . $unaNotteDaLeoni->durata;
echo "<br>";
$unaNotteDaLeoni->stampaGeneri();
echo "<br>";
echo "L'anno di pubblicazione del film è: " . $unaNotteDaLeoni->anno;
echo "<hr>";
// una notte da leoni due
echo "Il titolo del film è: " . $unaNotteDaLeoniDue->nome;
echo "<br>";
echo "La durata arrotondata del film è: " . $unaNotteDaLeoniDue->durata;
echo "<br>";
$unaNotteDaLeoniDue->stampaGeneri();
echo "<br>";
echo "L'anno di pubblicazione del film è: " . $unaNotteDaLeoniDue->anno;
