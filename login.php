<?php

class Login {
    public $nome;
    public $usuario;
    public $email;
    public $senha;

    public function cadastrar() {
        $objeto = new LoginDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        $objeto->set("usuario", $this->usuario);
        $objeto->set("nome", $this->nome);
        
        return $objeto->cadastrar();
        
    }
    public function alterar() {
        $objeto = new LoginDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        $objeto->set("usuario", $this->usuario);
        $objeto->set("nome", $this->nome);

        
        return $objeto->alterar();
    }

    public function excluir() {
        $objeto = new LoginDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        $objeto->set("usuario", $this->usuario);
        $objeto->set("nome", $this->nome);
        return $objeto->excluir();
    }
    
    public function trazerDados() {
        $objeto = new LoginDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        $objeto->set("usuario", $this->usuario);
        $objeto->set("nome", $this->nome);
        
        return $objeto->trazerDados();
    }


    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function logar() {
        $objeto = new LoginDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        $objeto->set("usuario", $this->usuario);
        $objeto->set("nome", $this->nome);
        
        $row = $objeto->Logar() ->fetch_assoc();
        if(empty($row)){
            return "nada";
        }else{
            return "OK";
        }
    

    }

}
?>
