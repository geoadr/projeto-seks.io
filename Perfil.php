<?php

class Perfil {
    public $cidade;
    public $pais;
    public $endereco;
    public $relacionamento;
    public $aniversario;
    public $sexo;
    public $telefone;

    public function cadastrar() {
        $objeto = new PerfilDAO();
        $objeto->set("cidade", $_POST["cidade"]);
        $objeto->set("pais", $_POST["pais"]);
        $objeto->set("endereco", $_POST["endereco"]);
        $objeto->set("relacionamento", $_POST["relacionamento"]);
        $objeto->set("aniversario", $_POST["aniversario"]);
        $objeto->set("sexo", $_POST["sexo"]);
        $objeto->set("telefone", $_POST["telefone"]);
        return $objeto->cadastrar();
        
    }
    public function alterar() {
        $objeto = new PerfilDAO();
        $objeto->set("cidade", $_POST["cidade"]);
        $objeto->set("pais", $_POST["pais"]);
        $objeto->set("endereco", $_POST["endereco"]);
        $objeto->set("relacionamento", $_POST["relacionamento"]);
        $objeto->set("aniversario", $_POST["aniversario"]);
        $objeto->set("sexo", $_POST["sexo"]);
        $objeto->set("telefone", $_POST["telefone"]);

        
        return $objeto->alterar();
    }

    
    public function trazerDados() {
        $objeto = new PerfilDAO();
        $objeto->set("cidade", $_POST["cidade"]);
        $objeto->set("pais", $_POST["pais"]);
        $objeto->set("endereco", $_POST["endereco"]);
        $objeto->set("relacionamento", $_POST["relacionamento"]);
        $objeto->set("aniversario", $_POST["aniversario"]);
        $objeto->set("sexo", $_POST["sexo"]);
        $objeto->set("telefone", $_POST["telefone"]);
        
        return $objeto->trazerDados();
    }


    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function salvardados() {
        $objeto = new PerfilDAO();
        $objeto->set("cidade", $_POST["cidade"]);
        $objeto->set("pais", $_POST["pais"]);
        $objeto->set("endereco", $_POST["endereco"]);
        $objeto->set("relacionamento", $_POST["relacionamento"]);
        $objeto->set("aniversario", $_POST["aniversario"]);
        $objeto->set("sexo", $_POST["sexo"]);
        $objeto->set("telefone", $_POST["telefone"]);
        
        $row = $objeto->salvardados() ->fetch_assoc();
        if(empty($row)){
            return "nada";
        }else{
            return "OK";
        }
    

    }

}
?>