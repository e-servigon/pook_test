<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

class PokemonVO{
    private $Id;
    private $Nombre;
    private $Nivel;

    public function setId($valor){
        $this->Id=$valor;
    }

    public function setNombre($valor){
        $this->Nombre=$valor;
    }

    //set Nivel
    public function setNivel($valor){
        $this->Nivel=$valor;
    }
    
    public function getId(){
        return $this->Id;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getNivel(){
        return $this->Nivel;
    }
}

//$vo = new PokemonVO();

//$vo->setId(1);
//echo $vo->getId();
//echo $vo->Id;
//echo $vo->Id2;
//echo #vo->Id3;
?>