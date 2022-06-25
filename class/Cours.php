<?php

class Cours {

    private $sigle;
    private $titre;
    private $idProfesseur;

    /**
     * @param $sigle, $titre, $idProfesseur
     */
    public function __construct($sigle, $titre, $idProfesseur){
        $this->sigle = $sigle;
        $this->titre = $titre;
        $this->idProfesseur = $idProfesseur;
    }

    public function __destruct(){
        echo "Le cours avec le sigle {$this->sigle} à été ajouté !";
    }

}



?>