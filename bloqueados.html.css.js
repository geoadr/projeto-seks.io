<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloqueados</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: #ffccff;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: linear-gradient(135deg, #ff66cc, #00ccff);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .title {
            font-size: 2.5em;
            margin: 0;
        }

        .main-container {
            display: flex;
            flex: 1;
            margin: 20px;
        }

        .sidebar {
            width: 300px;
            background: #cc99ff; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 100px;
            left: 20px; 
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            color: #ff3399;
            text-decoration: none;
            font-weight: bold;
            padding: 10px;
            display: block;
            background-color: #e6e6ff;
            border-radius: 5px;
            text-align: center;
            border: 2px solid #ff3399;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #ff3399;
            color: #fff;
        }

        main {
            flex: 1;
            margin-left: 340px; 
            padding: 20px;
        }

        .container {
            max-width: 800px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        .blocked-profile {
            text-align: center;
        }

        .blocked-profile h2 {
            color: #ff3399;
            margin-bottom: 20px;
        }

        .profile-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .profile-item {
            display: flex;
            align-items: center;
            background: #e6e6ff;
            border: 2px solid #ff3399;
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .profile-pic {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .profile-info h3 {
            color: #ff3366;
            margin: 0 0 10px 0;
        }

        .profile-info p button {
            color: #00ccff;
            background: #ffccff;
            border: 2px solid #00ccff;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
        }

        .profile-info p button:hover {
            background: #00ccff;
            color: #fff;
        }

        footer {
            background: linear-gradient(135deg, #ff69b4, #00bfff);
            color: white;
            padding: 15px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
            border-top: 3px dashed #ffccff;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.3);
        }

        footer a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 14px;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            background: #ff00ff;
            transition: background 0.3s, transform 0.3s;
        }

        footer a:hover {
            background: #ff66b2;
            transform: scale(1.1);
        }

        footer a:active {
            transform: scale(1);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .modal-content h3 {
            margin-bottom: 20px;
        }

        .modal-content button {
            margin: 0 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
        }

        .modal-content button:hover {
            background: #00ccff;
            color: #fff;
        }

        .modal-content button:nth-of-type(1) {
            background: #ff3399;
            color: #fff;
        }

        .modal-content button:nth-of-type(2) {
            background: #ffccff;
        }
    </style>
</head>
<body>
    <header>
        <h1 class="title">Perfis Bloqueados</h1>
    </header>
    <div class="main-container">
        <nav class="sidebar">
            <ul>
                <li><a href="perfil.html">Meu Perfil</a></li>
                <li><a href="chat.html">Mensagens</a></li>
                <li><a href="configuracoes.html">Configurações</a></li>
                <li><a href="#notificacoes">Notificações</a></li>
                <li><a href="#ajuda">Ajuda</a></li>
                <li><a href="#alterar-senha">Alterar Senha</a></li>
                <li><a href="#sair">Sair</a></li>
            </ul>
        </nav>
        <main>
            <div class="container">
                <div class="blocked-profile">
                    <h2>Usuários Bloqueados</h2>
                    <ul class="profile-list">
                        <li class="profile-item" id="profile1">
                            <img src="fotopefil.jpeg" alt="Perfil Bloqueado 1" class="profile-pic">
                            <div class="profile-info">
                                <h3>Maria Oliveira</h3>
                                <p><button onclick="confirmUnblock('profile1')">Desbloquear</button></p>
                            </div>
                        </li>
                        <li class="profile-item" id="profile2">
                            <img src="fotopefil.jpeg" alt="Perfil Bloqueado 2" class="profile-pic">
                            <div class="profile-info">
                                <h3>João Santos</h3>
                                <p><button onclick="confirmUnblock('profile2')">Desbloquear</button></p>
                            </div>
                        </li>
                        <li class="profile-item" id="profile3">
                            <img src="fotopefil.jpeg" alt="Perfil Bloqueado 3" class="profile-pic">
                            <div class="profile-info">
                                <h3>Ana Souza</h3>
                                <p><button onclick="confirmUnblock('profile3')">Desbloquear</button></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
    <div id="confirmation-modal" class="modal">
        <div class="modal-content">
            <h3>Você tem certeza?</h3>
            <button onclick="unblockProfile()">Sim</button>
            <button onclick="closeModal()">Não</button>
        </div>
    </div>
    <div class="footer">
        <a href="idioma.html">Lenguage</a>
        <a href="#">Privacy Policy</a>
        <a href="ajuda.html">Need Help?</a>
        <a href="pagprincipal.html">Main Screen</a>
        <a href="login.html">New account</a>
    </div>
    <script>
        function confirmUnblock(profileId) {
            window.selectedProfileId = profileId;
            document.getElementById('confirmation-modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('confirmation-modal').style.display = 'none';
        }

        function unblockProfile() {
            const profile = document.getElementById(window.selectedProfileId);
            profile.remove();
            closeModal();
        }
    </script>
</body>
</html>
