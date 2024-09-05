<?php

class PerfilDAO {
    public $cidade;
    public $pais;
    public $endereco;
    public $relacionamento;
    public $aniversario;
    public $sexo;
    public $telefone;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO Perfil (cidade, pais, endereco, relacionamento, aniversario, sexo, telefone)
                VALUES ('$this->cidade', '$this->pais', '$this->endereco', '$this->relacionamento', '$this->aniversario', '$this->sexo', '$this->telefone');";
        $objeto->set("sql", $SQL);
        //echo $SQL;
        $objeto->query();
        return "Salvo com Sucesso";
    }
    
    public function alterar() {
        $objeto = new Conexao();
        $SQL = "UPDATE Perfil SET endereco='$this->endereco' "
                . "WHERE endereco='$this->endereco';";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Alterado com Sucesso";
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
    
    public function trazerDados(){
        $objeto = new Conexao();
        $SQL = "SELECT cidade, pais, endereco, relacionamento, aniversario, sexo, telefone, id_login "
                . "FROM Perfil"
                . "INNER JOIN login on id_login == login.id_login ";
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }

    public function salvardados(){
        $objeto = new Conexao();
        $SQL = "SELECT cidade, pais, endereco, relacionamento, aniversario, sexo, telefone "
                . "FROM Perfil "
                . "WHERE cidade = '$this->cidade' and pais = '$this->pais'" ;
        $objeto->set("sql", $SQL);
        return $objeto->query();
    }
}
?>