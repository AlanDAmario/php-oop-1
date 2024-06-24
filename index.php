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

    //METODI 
    function print(){
        echo "Questo è il film <h3> $this->name , </h3> di tipo <h4> $this->type, </h4>  uscito il <h4> $this->release,</h4> l ' incasso è <h4>$this->boxOffice </h4> <br> <br>";
    }
}

//ISTANZA DELL OGGETTO MOVIE
//TRAMITE IL COSTRUTTORE ABBIMAO PASSATO DEI VALORI ALLE SUE PROPRIETà
$movie1 = new Movie('Kimetsu no yaiba', 'Anime/Action', '2020');
$movie1 -> set_boxOffice(120 . 'mln');
$movie1-> print();

$movie2 = new Movie('Titanic', 'Drama', '1997');
$movie2 -> set_boxOffice(886 . 'mln');
$movie2 -> print();


?>