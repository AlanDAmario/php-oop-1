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

    //GETTERS & SETTERS
    function set_name($name){
        $this-> name = $name;
    }

    function get_name(){
        return $this-> name;
    }

    function set_type($type){
        $this-> type = $type;
    }
    function get_type(){
        return $this -> type;
    }

    function set_release($release){
        $this -> release = $release;
    }

    function get_release(){
         return $this -> release;
    }

    function set_boxOffice($boxOffice){
        $this -> boxOffice = $boxOffice;
    }

    function get_boxOffice(){
        return $this -> boxOffice;
    }
}

//ISTANZA DELL OGGETTO MOVIE
//TRAMITE IL COSTRUTTORE ABBIMAO PASSATO DEI VALORI ALLE SUE PROPRIETà
$movie1 = new Movie('Kimetsu no yaiba', 'Anime/Action', '2020');
var_dump($movie1);


?>