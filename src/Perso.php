<?php
class Perso {
    // Attributs
    private $nom;
    private $hp;
    private $puissance;


    //Methodes
    public function __construct($nom, $hp, $puissance)
    {
        $this->nom = $nom;
        $this->hp = $hp;
        $this->puissance = $puissance;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getHp()
    {
        return $this->hp;
    }
    public function setHp($hp)
    {
        $this->hp = $hp;
    }
    public function getPuissance()
    {
        return $this->puissance;
    }
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }
    public function hit()
    {
        $dega =  rand(0,20);
        $this->hp -=  $dega;
        echo $this->nom . " Jat fiha dega dyal " . $dega;
   }
    public function __toString()
    {
        return "Nom : " . $this->nom . ",HP :" . $this->hp ."%" . ", Puissance : " . $this->puissance;
    }


}