<?php

class PostagemDAO {
    public $pensamento;
    public $figura_nome;
    public $id_perfil;
    public $id_postagem;

    public function cadastrar_figura() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO Postagem (figura_nome, id_perfil )
               VALUES ('$this->pensamento', '$this->id_perfil' ) ;";
        $objeto->set("sql", $SQL);
        echo $SQL;
        $objeto->query();
        return "Cadastrado com Sucesso";
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
    
    public function consultar(){
        $objeto = new Conexao();
        $SQL = "SELECT * "
                . "FROM Postagem";
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }

}
