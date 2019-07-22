<?php
require_once("Sql.php");
class Usuario {
    private $idusuario;
    private $nome;
    private $senha;
    private $dtcadastro;

    public function getIdusuario(){
        return $this->idusuario;
    }
    
    public function setIdusuario($id){

        return $this->idusuario = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        return $this->nome = $nome;
    }
    
    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        return $this->senha = $senha;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function setDtcadastro($date){
        return $this->dtcadastro = $date;
    }

    public function setDados($dados){

        $this->setIdusuario($dados['idusuario']);
        $this->setNome($dados['nome']);
        $this->setSenha($dados['senha']);
        $this->setDtcadastro(new DateTime($dados['dtcadastro']));
    }

    public function carregarDados($id){

        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_dados WHERE idusuario = :ID", array(
            ':ID'=>$id
        ));

        if(count($results) > 0 ){

            $row = $results[0];
            $this->setDados($row);
        }

    }

    public static function getList(){

        $sql = new Sql();
        return $results = $sql->select("SELECT * FROM tb_dados");
        
    }

    public static function search($nome){

        $sql = new Sql();
        return $results = $sql->select("SELECT * FROM tb_dados WHERE nome LIKE :NOME ORDER BY nome", array(
            ':NOME'=>"%".$nome."%"
        ));

    }

    public function login($nome, $senha){
        
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_dados  WHERE nome = :NOME AND senha = :SENHA", array(
            ':NOME'=>$nome,
            ':SENHA'=>$senha
        ));

        if(isset($result[0])){

            $this->setDados($result[0]);

        }else{
            throw new Exception("Error Try");
            
        }
    }

    public function insert(){

        $sql = new Sql();
        $results = $sql->select("CALL sp_dados_insert(:NOME, :SENHA)", array(
            ':NOME'=>$this->getNome(),
            ':SENHA'=>$this->getSenha()
        ));

        if(count($results)>0){

            $this->setDados($results[0]);
        }else{
            throw new Exception("Error");
            
        }
    }

    public function update($nome, $senha){

        $this->setNome($nome);
        $this->setSenha($senha);

        $sql = new Sql();
        $sql->query("UPDATE tb_dados SET nome = :NOME , senha = :SENHA WHERE idusuario = :ID",array(
            ':NOME'=>$this->getNome(),
            ':SENHA'=>$this->getSenha(),
            ':ID'=>$this->getIdusuario()
        ));
    }

    public function delete($id){
        
        $sql = new Sql();
        $sql->query("DELETE FROM tb_dados WHERE idusuario = :ID", array(
            ':ID'=>$id
        ));
    }

    public function __construct($nome = "", $senha = ""){
       if($nome != "" and $senha != ""){
            $this->setNome($nome);
            $this->setSenha($senha);
            $this->insert();
        }
    }


    public function __toString(){
        return json_encode(array(
            'idusuario'=>$this->getIdusuario(),
            'nome'=>$this->getNome(),
            'senha'=>$this->getSenha(),
            'dtcadastro'=>$this->getDtcadastro()->format("d/m/y H:i:s")
        ));
    }

}

$del = new Usuario;
$del->delete(1);

echo "Atualizado";



