<?php
class Usuario {
    public $Nome;
    public $Email;
    public $Data_De_Nascimento;
    public $Genero;
    public $Tenho_interesse_em;
    public $To_procurando:
    public $Fotos;
    public $Interesses;
    public $Orientacao_Sexual;  

    public function Cadastrar() {
        $objeto = new UsuarioDAO();
        $objeto set->set("Nome", $this->$Nome);
        $objeto set->set("Email", $this->$Email);
        $objeto set->set("Data_De_Nascimento", $this->$Data_De_Nascimento);
        $objeto set->set("Genero", $this->$Genero);
        $objeto set->set("Tenho_interesse_em", $this->$Tenho_interesse_em);
        $objeto set->set("To_procurando", $this->$To_procurando);
        $objeto set->set("Fotos", $this->$Fotos);
        $objeto set->set("Interesses", $this->$Interesses);
        $objeto set->set("Orientacao_Sexual", $this->$Orientacao_Sexual);

        return $objeto->Cadastrar();

    }

}
?>
