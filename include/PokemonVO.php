<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

class PokemonVO{
    private $Id;
    private $Nombre;

    public function setId($valor){
        $this->Id=$valor;
    }

    public function setNombre($valor){
        $this->Nombre=$valor;
    }

    public function getId(){
        return $this->Id;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    //getNivel();
}

//$vo = new PokemonVO();

//$vo->setId(1);

//echo $vo->getId();

//echo $vo->Id;
//echo $vo->Id2;
//echo #vo->Id3;
?>