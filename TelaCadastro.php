0<?php
include "Login.php";
include "LoginDAO.php";
include "Conexao.php";

$msg = "";

if (!empty($_POST)){
    $objeto = new Login();
    $objeto->set("nome", $_POST["nome"]);
    $objeto->set("usuario", $_POST["usuario"]);
    $objeto->set("email", $_POST["email"]);
    $objeto->set("senha", $_POST["senha"]);
 
      //Percorre a Variável Global $_POST
    foreach($_POST as $chave=>$botao) {
        
        if($botao == "Cadastrar"){
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
    <title>Cadastro</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>

<?php 
        echo $msg;
        if ($msg != ""){
            echo "<script> window.location.href='telaLogar.php'</script>";
        }
        ?> 
        
    <header>
        <div class="logo">
            <img src="imagemlogin.png" alt="Logo">
        </div>
    </header>
    <div class="container">
        <h1>Are you new here? Register here!</h1>
        <form id="CadastroL" method="POST" action="">
            <label for="nome">Name:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="username">Create username:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="nova-senha">New Password:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="confirmar-senha">Confirm Password:</label>
            <input type="password" id="confirmar_senha" name="confirmar_senha" required>

            <button type="submit" id="btnCadastrar" name="btnCadastrar" value="Cadastrar">Save</button>
        </form>
    </div>
</body>
</html>
