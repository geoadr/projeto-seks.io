<?php

class LoginDAO {
    public $email;
    public $senha;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO email (numero, senha, local)
                VALUES ($this->numero, '$this->senha', '$this->local');";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }
    
    public function alterar() {
        $objeto = new Conexao();
        $SQL = "UPDATE login SET senha='$this->senha', local='$this->local'"
                . "WHERE numero='$this->numero';";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Alterado com Sucesso";
    }
    
    public function excluir() {
        $objeto = new Conexao();
        $SQL = "DELETE FROM login WHERE numero = $this->numero;";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Excluido com Sucesso";
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
    
    public function trazerDados(){
        $objeto = new Conexao();
        $SQL = "SELECT numero, senha, local"
                . "FROM login"
                . "WHERE local LIKE '%$this->local%'";
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
