<?php
include "Conexao.php"; // Inclua o arquivo com a configuração da conexão com o banco de dados
include "UsuarioDAO.php"; // Inclua o arquivo com a lógica de acesso a dados para UsuarioDAO

$msg = "";

if (!empty($_POST)) {
    $objeto = new UsuarioDAO();
    $objeto->set("username", $_POST["username"]);
    $objeto->set("password", $_POST["password"]);

    foreach ($_POST as $chave => $campo) {
        if ($campo == "Login") {
            $msg = $objeto->login();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    <script src="biblioteca.js"></script>
    <title>Login</title>
</head>
<body>
    <section class="form">
        <form id="frmLogin" method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" name="Login" value="Login">
        </form>
    </section>

    <div>
        <?php echo $msg; ?>
    </div>
</body>
</html>
