<?php

class SQL extends PDO{

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbariel", "root", "");

    }

    private function setParametros ($statement, $dados = array()){
        
        foreach ($dados as $key => $value) {

            $this->setParametro ($statement ,$key, $value);

        }
    }

    private function setParametro ($statement   , $key, $value){

        $statement->bindParam($key,$value);
    }

    public function query ($rowQuery, /* Parametros declarados na index*/$parametros = array()){

        $stmt = $this->conn->prepare($rowQuery);

        $this->setParametros($stmt, $parametros);

        $stmt->execute();

        return $stmt;

    }

    public function select($rowQuery, $parametros = array()):array{

        $stmt = $this->query($rowQuery, $parametros);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

