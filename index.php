<?php 

class Movie{
    //PROPRIETà
    public $name;
    public $type;
    public $release;
    private $boxOffice;

    //COSTRUTTORE, ALL INTERNO DELLE (PROPRIETà DA ANNUNCIARE)
    function __construct($name, $type, $release){
        //RIFERIMENTO DELLE PROPRIETà
        $this->name = $name;
        $this->type = $type;
        $this->release = $release;
    }
}

//ISTANZA DELL OGGETTO MOVIE
//TRAMITE IL COSTRUTTORE ABBIMAO PASSATO DEI VALORI ALLE SUE PROPRIETà
$movie1 = new Movie('Kimetsu no yaiba', 'Anime/Action', '2020');
var_dump($movie1);


?>