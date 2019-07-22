<?php

class Cadastro {

    private $nome;
    private $email;
    private $senha;

    public function getNome():string{

        return $this->nome;
    }

    public function setNome($n){

        return $this->nome = $n;
    }

    public function getEmail():string{

        return $this->email;
    }

    public function setEmail($e){

        return $this->email = $e;
    }
    public function getSenha():int{

        return $this->senha;
    }
    public function setSenha($s){

        return $this->senha = $s;
    }

    public function __toString(){

        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }

}