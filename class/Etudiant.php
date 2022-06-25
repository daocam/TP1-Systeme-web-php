<?php
require_once "class/Person.php";

class Etudiant extends Person {

    private $code;
    private $sexe;

    /**
     * @param $prenom, $nom, $code, $sexe
     */
    public function __construct($prenom, $nom, $code, $sexe){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->code = $code;
        $this->sexe = $sexe;
    }

    public function __destruct(){
        echo "L\'étudiant avec le code permanent {$this->code} à été ajouté !";
    }

}



?>