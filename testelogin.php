<?php
class login {
    public $email;
    public $senha;


public function consultarTodos() {
    $objeto = new loginDAO();
    return $objeto->consultarTodos();
}

public function cadastrar() {
    $objeto = new loginDAO();
    $objeto->set("email", $this->email);
    $objeto->set("senha", $this->senha);
    return $objeto->cadastrar();
}    

public function alterar() {
    $objeto = new loginDAO();
    $objeto->set("email", $this->email);
    $objeto->set("senha", $this->senha);
    return $objeto->alterar();
}    

public function set($prop, $value) {
    $this->$prop = $value;
}
}
?>
?>
