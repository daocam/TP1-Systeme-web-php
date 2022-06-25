<?php
require_once "class/Person.php";

class Professeur extends Person {

    private $id;
    
    /**
     * @param $prenom, $nom, $id
     */
    public function __construct($prenom, $nom, $id){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->id = $id;
    }

    public function __destruct(){
        echo "Le professseur avec l\'id {$this->id} à été ajouté !";
    }
}

?>