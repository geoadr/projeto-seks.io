<?php

class Postagem {
    public $pensamento;
    //public $sentimento;
    //public $reacao;


    public function cadastrar() {
        $objeto = new pagprincinalDAO();
       // $objeto->set("sentimento", $this->sentimento);
        $objeto->set("pensamento", $this->pensamento);
     //   $objeto->set("reacao", $this->reacao);
        
        return $objeto->cadastrar();
        
    }
    public function alterar() {
        $objeto = new pagprincipalDAO();
        $objeto->set("pensamento", $this->pensamento);
       // $objeto->set("sentimento", $this->sentimento);
        //objeto->set("sentimento", $this->sentimento);



        
        return $objeto->alterar();
    }

    public function excluir() {
        $objeto = new pagprincipalDAO();
        $objeto->set("pensamento", $this->pensamento);
        //$objeto->set("sentimento", $this->sentimento);
        //$objeto->set("reacao", $this->reacao);
        return $objeto->excluir();
    }
    
    public function trazerDados() {
        $objeto = new pagprincipalDAO();
        $objeto->set("pensamento", $this->pensamento);
        $objeto->set("sentimento", $this->sentimento);
        $objeto->set("reacao", $this->reacao);

        return $objeto->trazerDados();
    }


    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function postar() {
        $objeto = new LoginDAO();
        $objeto->set("pensamento", $this->pensamento);
        $objeto->set("sentimento", $this->sentimento);
        $objeto->set("reacao", $this->reacao);
        
        $row = $objeto->postar() ->fetch_assoc();
        if(empty($row)){
            return "nada";
        }else{
            return "OK";
        }
    

    }


}
?>