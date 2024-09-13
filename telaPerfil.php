<?php
include "Perfil.php";
include "PerfilDAO.php";
include "Conexao.php";

$msg = "";

if (!empty($_POST)){
    $objeto = new Perfil();
    $objeto->set("cidade", $_POST["cidade"]);
    $objeto->set("pais", $_POST["pais"]);
    $objeto->set("endereco", $_POST["endereco"]);
    $objeto->set("relacionamento", $_POST["relacionamento"]);
    $objeto->set("aniversario", $_POST["aniversario"]);
    $objeto->set("sexo", $_POST["sexo"]);
    $objeto->set("telefone", $_POST["telefone"]);
 
      //Percorre a Variável Global $_POST
    foreach($_POST as $chave=>$botao) {
        
        if($botao == "Salvar"){
            $msg = $objeto->cadastrar();        
        }         
    }    
} 

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perfil</title>

    <link rel="stylesheet" href="cssPerfil.css">

</head>
<body>


<?php 
        echo $msg;
        if ($msg != ""){
            echo "<script> window.location.href='telapagprincipal.php'</script>";
        }
        ?> 


    <div class="header">
        <img src="imagemlogin.png" alt="Logo" class="logo">
        <h1 class="title">Altere aqui o seu perfil!</h1>
    </div>
    <div class="container">
    <form id="PerfilW" method="POST" action="">
        <div class="profile-section">
            <div class="profile-img-wrapper">
                <div class="profile-img-bg"></div>
                <img id="profile-img" class="profile-img" src="default-profile.png" alt="Foto de Perfil">
            </div>
            <div class="profile-info">
                <div class="form-group">
                    <label for="first-name">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="city">Cidade</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade" required>
                </div>
                <div class="form-group">
                    <label for="country">País</label>
                    <select id="pais" name="pais" required>
                        <option value="">Selecione</option>
                        <option value="brasil">Brasil</option>
                        <option value="eua">Estados Unidos</option>
                        <option value="canada">Canadá</option>
                        <option value="franca">França</option>
                        <option value="alemania">Alemanha</option>
                        <option value="japao">Japão</option>
                        <option value="australia">Austrália</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="additional-info">
            <div class="info-notice">Somente amigos podem ver as informações abaixo:</div>
            <div class="form-group">
                <label for="address">Endereço</label>
                <input type="text" id="endereco" name="endereco" placeholder="Endereço" required>
            </div>
            

            <div class="form-group">
                <label for="relationship">Relacionamento</label>
                <select id="relacionamento" name="relacionamento" required>
                    <option value="">Selecione</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="namorando">Namorando</option>
                    <option value="divorciado">Divorciado</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birthday">Aniversário</label>
                <input type="date" id="aniversario" name="aniversario" required>
            </div>

            <div class="form-group">
                <label for="gender">Sexo</label>
                <select id="sexo" name="sexo" required>
                    <option value="">Selecione</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="Telefone" required>
            </div>
        </div>


        <div class="form-group">
            <!--button type="button" class="btn-save" onclick="saveChanges()" value="Cadastrar">Salvar</button-->
            <button type="submit" id="btnSalvar" name="btnSalvar" value="Salvar">Save</button>
            <!--button type="button" class="btn-cancel" onclick="cancelChanges()">Cancelar</button-->
        </div>
    </form>
    </div>
    <div class="footer">
        <a href="idioma.html">Lenguage</a>
        <a href="#">Privacy Policy</a>
        <a href="ajuda.html">Need Help?</a>
        <a href="pagprincipal.html">Main Screen</a>
        <a href="login.html">New account</a>
    </div>

</body>
</html>
