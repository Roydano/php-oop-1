<?php

//è definita una classe ‘Movie’ --ok
//=> all'interno della classe sono dichiarate delle variabili d'istanza -- ok
//=> all'interno della classe è definito un costruttore => --ok
//all'interno della classe è definito almeno un metodo
//vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà  


class Movie{
    public $titolo;
    public $durata;
    public $annoUscita;
    public $prezzo = 19;
    public $sconto = 0;
    public $genere;

    function __construct($_annoUscita){
        $this->annoUscita = $_annoUscita;
    }

    public function setSconto(){
        if($this->annoUscita > 2000){
            $this->sconto = 0.2;
        }
        elseif($this->annoUscita < 1980){
            $this->sconto = 0.5;
        }
    }

    public function getSconto(){
        return $this->sconto;
    }
}

$movie1 = new Movie(2005);
$movie1->titolo = 'Harry Potter - Il calice di fuoco';
$movie1->durata = '2h 37m';
$movie1->genere = 'Fantastico/Avventura';

$movie1->setSconto();
$scontoApplicato = $movie1->getSconto();

$scontoApplicato = $movie1->prezzo * $scontoApplicato;
$prezzoFinale = $movie1->prezzo - $scontoApplicato;

echo $movie1->titolo . ' ' . ' Prezzo €'  . $prezzoFinale . '<br>';







$movie2 = new Movie(1974);
$movie2->titolo = 'Frankenstein Junior';
$movie2->durata = '1h 46m';
$movie2->genere = 'Horror/Commedia';

$scontoApplicato = $movie2->setSconto();
$scontoApplicato = $movie2->getSconto();

$scontoApplicato = $movie2->prezzo * $scontoApplicato;
$prezzoFinale = $movie2->prezzo - $scontoApplicato;

echo $movie2->titolo . ' ' . ' Prezzo €'  . $prezzoFinale . '<br>';





$movie3 = new Movie(1985);
$movie3->titolo = 'Ritorno al futuro';
$movie3->durata = '1h 56m';
$movie3->genere = 'Commedia/Sci-fi';

$scontoApplicato = $movie3->setSconto();
$scontoApplicato = $movie3->getSconto();

$scontoApplicato = $movie3->prezzo * $scontoApplicato;
$prezzoFinale = $movie3->prezzo - $scontoApplicato;

echo $movie3->titolo . ' ' . ' Prezzo €'  . $prezzoFinale;
