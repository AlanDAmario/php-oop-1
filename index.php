<?php 

class Movie{
    //PROPRIETà
    public string $name;
    public string $type;
    public int $release;
    private  $boxOffice;

    //COSTRUTTORE, ALL INTERNO DELLE (PROPRIETà DA ANNUNCIARE)
    function __construct($name, $type, $release){
        //RIFERIMENTO DELLE PROPRIETà
        $this->name = $name;
        $this->type = $type;
        $this->release = $release;
    }

    //GETTERS & SETTERS
    function set_name(string $name){
        $this-> name = $name;
    }

    function get_name(){
        return $this-> name;
    }

    function set_type(string $type){
        $this-> type = $type;
    }
    function get_type(){
        return $this -> type;
    }

    function set_release(int $release){
        $this -> release = $release;
    }

    function get_release(){
         return $this -> release;
    }


     function set_boxOffice(int $boxOffice){
        if(!is_int($boxOffice) || $boxOffice < 0 ){
            throw new Exception("L'incasso deve essere un numero intero e maggiore di almeno 10 mln");
        }
         $this -> boxOffice = $boxOffice;
     }

     function get_boxOffice(){
         return $this -> boxOffice;
     }



    //METODI 
    function print(){
        echo "Questo è il film <h3> $this->name , </h3> di tipo <h4> $this->type, </h4>  uscito il <h4> $this->release,</h4> l ' incasso è <h4>$this->boxOffice  mln</h4> <br> <br>";
    }

    function getMessage(){
        'Ops! Qualcosa è andato storto';
    }

}

try {
    //ISTANZA DELL OGGETTO MOVIE
    //TRAMITE IL COSTRUTTORE ABBIMAO PASSATO DEI VALORI ALLE SUE PROPRIETà
    $movie1 = new Movie('Kimetsu no yaiba', 'Anime/Action', '2020');
    $movie1 -> set_boxOffice(120);
    $movie1-> print();
    
    $movie2 = new Movie('Titanic', 'Drama', '1997');
    $movie2 -> set_boxOffice(886);
    $movie2 -> print();

} catch (Exception $e) {
    echo $e->getMessage();
} catch (Error $e) {
    echo 'errore fatale chiama Gateano :D';
}


?>