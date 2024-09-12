<?php

class Postagem {
    public $pensamento;
    public $figura_nome;
    public $id_perfil;
    public $id_postagem;

    public function cadastrar_figura() {
        $objeto = new PostagemDAO(); // Corrigido o erro de digitação
        $objeto->set("id_perfil", $this->id_perfil);
        $nomearquivo = $this->imagem;
        $objeto->set("figura_nome", $nomearquivo["name"]);

        
        return $objeto->cadastrar();
    }


    public function excluir() {
        $objeto = new PostagemDAO();
        $objeto->set("id_postagem", $this->id_postagem);
        return $objeto->excluir();
    }

    public function consultar() {
        $objeto = new PostagemDAO();
        $objeto->set("id_perfil", $this->id_perfil);

        return $objeto->consultar();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }

    public function gravarimagem(){
        try {
            $pasta_dir = "fotos_$this->id_perfil/";
            if(!file_exists($pasta_dir)) {
                mkdir ($pasta_dir);
            }
            $arquivo = $this->imagem;
            $nomearquivo = $arquivo["name"]; //nome da imagem

            if ($arquivo["type"] == "image/jpeg" || $arquivo["type"] == "image/png") { //filtrar tipo de imagem
                move_uploaded_file($arquivo["tmp_name"], $pasta_dir . $nomearquivo);
            }else{
                return "tipo permitido de imagem: JPG ou PNG";
            }
            return "Upload da foto realizado com sucesso";
        } catch (exception $ex) {
            return $ex;
        }
    }

}
?>
