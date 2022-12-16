<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie{

    public $name;
    public $genre;
    public $duration;
    public $year;

    function __construct($_name,$_genre,$_duration,$_year){

        $this -> name = $_name;
        $this -> genre = $_genre;
        $this -> duration =  $_duration;
        $this -> year = $_year;
    }

    public function inDuration(){

        if($this -> duration > 120){

            return "$this->name dura piu di 2 ore";

        }else{

            return "$this->name dura meno di 2 ore";
        }   

    }

}

?>