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
