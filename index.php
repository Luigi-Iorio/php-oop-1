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
        $this->durata = $durataFilm;
        $this->genere = $genereFilm;
        $this->anno = $annoFilm;
    }
}
