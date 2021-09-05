<?php
require_once("PokemonVO.php");

class PokemonDAO{
    private $host = "localhost";
    private $user = "sepherot_DemoAdmin";
    private $password = "Pa73UiXbWG";
    private $database = "sepherot_DemoDB";
    private $tabla = "T_Pokemon";
    private $cnx;

    function __construct(){
        $this->cnx = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

    function selectAll(){
        $query = "SELECT * FROM ".$this->tabla;
        $res = mysqli_query($this->cnx, $query);
        while($fila=mysqli_fetch_assoc($res)){
            $vo = new PokemonVO();
            $vo->setId($fila["ID_Pokemon"]);
            $vo->setNombre($fila["Pok_Nombre"]);
            $listadoVo[] = $vo;
        }
        return $listadoVo;
    }

    function insertar($vo){
        $query = "INSERT INTO ".$this->tabla." (Pok_Nombre) VALUES('".$vo->getNombre()."') ";
        $res = mysqli_query($this->cnx, $query);
        if($res){
            return True;
        }
        else{
            return False;
        }
    }


}


// $dao = new PokemonDAO();
// $vo = new PokemonVO();
// $vo->setNombre("Pikachu");
// $dao->insertar($vo);
// print_r($dao->selectAll());
// print_r(2);
?>

