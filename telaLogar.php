<?PHP
include "Login.php";
include "Conexao.php";
include "LoginDAO.php";

$msg = "";

if (!empty($_POST)){
    $objeto = new Login();
    $objeto->set("email", $_POST["email"]);
    $objeto->set("senha", $_POST["senha"]);
 
    
      //Percorre a Variável Global $_POST
    foreach($_POST as $chave=>$botao) {
        
        if($botao == "Entrar"){
            $msg = $objeto->logar();        
        } 

        

    }    
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        echo $msg;
        if ($msg == "OK"){
            echo "<script> window.location.href='pagprincipal.html'</script>";
        }
        ?> 
    <div id="logo">
<img src="imagemlogin.png" alt="">
    </div>
        <div id="areaLogin">
            <div id="boxLogin">
                <form id="LoginF" method="POST" action="">

                    <div id="areaCampos">
                        <!-- <input class="campos" type="text" placeholder="Nome do Usuário"> -->
                        <input class="campos" type="email" placeholder="e-mail" name="email">
                        <input class="campos" type="password" placeholder="Senha" name="senha">
                        <div id="manterConectado">
                            <input type="checkbox" id="conectado">&nbsp;
                            <label for="conectado">Manter conectado</label>
                        </div>
                        <input type="submit" value="Entrar" id="botao"  name="botao">
                        <p>É novo aqui?<a href="cadastro2.html"> Criar conta</a></p>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>
<style>
/* login.css */

body {
    font-family: 'Comic Sans MS', cursive, sans-serif;
    background: linear-gradient(135deg, #ffb6c1, #a2c2e4); /* Degradê rosa claro e azul claro ajustado */
    color: #fff;
    margin: 0;
    padding: 0;
    text-align: center;
}

#logo {
    margin-top: 50px;
}

#logo img {
    width: 400px; /* Imagem ainda maior */
    height: auto;
}

#areaLogin {
    display: flex;
    justify-content: center;
    align-items: center;
    height: calc(100vh - 50px); /* Espaço para o logo */
}

#boxLogin {
    background: rgba(255, 255, 255, 0.9); /* Caixa de login com fundo branco semitransparente */
    border-radius: 20px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    padding: 30px;
    width: 400px; /* Caixa de login maior */
    max-width: 90%;
    margin: 20px;
}

#areaCampos {
    display: flex;
    flex-direction: column;
}

.campos {
    margin: 15px 0;
    padding: 15px;
    border: 2px solid #0000ff; /* Azul vibrante */
    border-radius: 10px;
    font-size: 16px;
    background: #fff;
    color: #000;
    font-family: 'Comic Sans MS', cursive, sans-serif;
}

#manterConectado {
    display: flex;
    align-items: center;
    margin: 15px 0;
    color: #0000ff; /* Azul vibrante para o texto */
}

#manterConectado input[type="checkbox"] {
    margin-right: 8px;
}

#botao {
    background-color: #ff69b4; /* Rosa vibrante */
    color: #fff;
    border: none;
    padding: 15px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 18px;
    font-family: 'Comic Sans MS', cursive, sans-serif;
}

#botao:hover {
    background-color: #0000ff; /* Azul vibrante para hover */
}

p {
    margin-top: 20px;
    color: #0000ff; /* Azul vibrante para o texto */
}

a {
    color: #ff1493; /* Rosa escuro para o link */
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>

</html>
