<?php

class LoginDAO {
    public $nome;
    public $usuario;
    public $email;
    public $senha;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO Login (email, senha, nome, usuario)
                VALUES ('$this->email', '$this->senha', '$this->nome', '$this->usuario');";
        $objeto->set("sql", $SQL);
        //echo $SQL;
        $objeto->query();
        return "Cadastrado com Sucesso";
    }
    
    public function alterar() {
        $objeto = new Conexao();
        $SQL = "UPDATE Login SET senha='$this->senha' "
                . "WHERE numero='$this->numero';";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Alterado com Sucesso";
    }
    
    public function excluir() {
        $objeto = new Conexao();
        $SQL = "DELETE FROM Login WHERE numero = $this->numero;";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Excluido com Sucesso";
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
    
    public function trazerDados(){
        $objeto = new Conexao();
        $SQL = "SELECT email, senha "
                . "FROM login";
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }

    public function logar(){
        $objeto = new Conexao();
        $SQL = "SELECT email, senha "
                . "FROM Login "
                . "WHERE email = '$this->email' and senha = '$this->senha'" ;
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }
}
