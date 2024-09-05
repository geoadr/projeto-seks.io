<?php

class pagprincipalDAO {
    public $pensamento;
   // public $sentimento;
    //public $reacao;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO pagprincipal (pensamento sentimento, reacao)
                VALUES ('$this->pensamento', '$this->sentimento', '$this->reacao');";
        $objeto->set("sql", $SQL);
        //echo $SQL;
        $objeto->query();
        return "Cadastrado com Sucesso";
    }
    
    public function alterar() {
        $objeto = new Conexao();
        $SQL = "UPDATE pagprincipal SET senha='$this->pensamento' "
                . "WHERE pensamento='$this->pensamento';";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Alterado com Sucesso";
    }
    
    public function excluir() {
        $objeto = new Conexao();
        $SQL = "DELETE FROM pagprincipal WHERE pensamento = $this->pensamento;";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Excluido com Sucesso";
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
    
    public function trazerDados(){
        $objeto = new Conexao();
        $SQL = "SELECT pensamento, sentimento, reacao "
                . "FROM pagprincipal";
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }

    public function postar(){
        $objeto = new Conexao();
        $SQL = "SELECT pensamento, sentimento, reacao "
                . "FROM pagprincipal "
                . "WHERE pensamento = '$this->pensamento' and sentimento = '$this->sentimento' and reacao = '$this->reacao'" ;
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }
}