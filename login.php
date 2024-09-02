<?php

class Login {
    public $email;
    public $senha;


    public function cadastrar() {
        $objeto = new LoginDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        
        return $objeto->cadastrar();
        
    }
    public function alterar() {
        $objeto = new SalaDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);

        
        return $objeto->alterar();
    }

    public function excluir() {
        $objeto = new SalaDAO();
        $objeto->set("email", $this->email);        
        return $objeto->excluir();
    }
    
    public function trazerDados() {
        $objeto = new SalaDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);
        
        return $objeto->trazerDados();
    }


    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function logar() {
        $objeto = new LoginDAO();
        $objeto->set("email", $this->email);
        $objeto->set("senha", $this->senha);

        $row = $objeto->Logar() ->fetch_assoc();
        if(empty($row)){
            return "nada";
        }else{
            return "OK";
        }
    

    }

}
