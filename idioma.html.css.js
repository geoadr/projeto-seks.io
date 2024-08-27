<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione o Idioma</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #ff00cc, #3333ff);
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .container {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            padding: 50px; /* Aumentado para mais espaço ao redor */
            display: inline-block;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin-top: 30px;
        }
        h1 {
            font-size: 2.5em; /* Aumentado para destacar o título */
            margin-bottom: 20px;
        }
        select {
            padding: 15px; /* Aumentado para mais espaço interno */
            font-size: 1.2em; /* Aumentado para um texto maior */
            border-radius: 15px; /* Aumentado para bordas mais arredondadas */
            border: none;
            outline: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            background: #fff;
            color: #000;
            width: 100%; /* Faz com que o select ocupe toda a largura disponível */
            max-width: 300px; /* Define uma largura máxima para o select */
        }
        option {
            color: #000;
        }
        .sidebar {
            width: 250px;
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            position: fixed;
            top: 100px;
            left: 20px;
            color: #fff;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            margin-bottom: 10px;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            padding: 12px 20px;
            display: block;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.4);
            transition: background-color 0.3s, color 0.3s;
        }
        .sidebar ul li a:hover {
            background-color: rgba(0, 0, 0, 0.5);
            color: #ffccff;
        }
        .logo {
            position: fixed;
            top: 20px;
            left: 20px;
        }
        .logo-img {
            width: 200px;
        }
        .main-content {
            margin-left: 300px;
            padding: 20px 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 70px);
        }
        .footer {
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
        .footer a {
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
        .footer a:hover {
            background: #ff66b2;
            transform: scale(1.1);
        }
        .footer a:active {
            transform: scale(1);
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="imagemlogin.png" alt="Logo" class="logo-img">
    </div>

    <nav class="sidebar">
        <ul>
            <li><a href="perfil.html" data-i18n="sidebar.profile">Meu Perfil</a></li>
            <li><a href="chat.html" data-i18n="sidebar.messages">Mensagens</a></li>
            <li><a href="configuracoes.html" data-i18n="sidebar.settings">Configurações</a></li>
            <li><a href="#notificacoes" data-i18n="sidebar.notifications">Notificações</a></li>
            <li><a href="#ajuda" data-i18n="sidebar.help">Ajuda</a></li>
            <li><a href="#alterar-senha" data-i18n="sidebar.changePassword">Alterar Senha</a></li>
            <li><a href="#sair" data-i18n="sidebar.logout">Sair</a></li>
        </ul>
    </nav>

    <div class="main-content">
        <div class="container">
            <h1 data-i18n="title">Escolha seu idioma</h1>
            <select id="language" onchange="changeLanguage()">
                <option value="en">English</option>
                <option value="es">Español</option>
                <option value="fr">Français</option>
                <option value="de">Deutsch</option>
                <option value="pt" selected>Português</option>
                <option value="it">Italiano</option>
                <option value="ja">日本語 (Japonês)</option>
                <option value="ko">한국어 (Coreano)</option>
                <option value="zh">中文 (Chinês)</option>
                <option value="ar">العربية (Árabe)</option>
                <option value="ru">Русский (Russo)</option>
            </select>
            <p data-i18n="description">Selecione o idioma desejado e a página será traduzida automaticamente.</p>
        </div>
    </div>

    <script src="https://unpkg.com/i18next@21.6.1/i18next.min.js"></script>
    <script>
        // Configuração inicial do i18next
        i18next.init({
            lng: 'pt', // idioma padrão
            resources: {
                en: {
                    translation: {
                        "title": "Choose your language",
                        "description": "Select your desired language and the page will be translated automatically.",
                        "sidebar": {
                            "profile": "My Profile",
                            "messages": "Messages",
                            "settings": "Settings",
                            "notifications": "Notifications",
                            "help": "Help",
                            "changePassword": "Change Password",
                            "logout": "Logout"
                        }
                    }
                },
                es: {
                    translation: {
                        "title": "Elija su idioma",
                        "description": "Seleccione su idioma deseado y la página se traducirá automáticamente.",
                        "sidebar": {
                            "profile": "Mi Perfil",
                            "messages": "Mensajes",
                            "settings": "Configuraciones",
                            "notifications": "Notificaciones",
                            "help": "Ayuda",
                            "changePassword": "Cambiar Contraseña",
                            "logout": "Salir"
                        }
                    }
                },
                fr: {
                    translation: {
                        "title": "Choisissez votre langue",
                        "description": "Sélectionnez votre langue désirée et la page sera traduite automatiquement.",
                        "sidebar": {
                            "profile": "Mon Profil",
                            "messages": "Messages",
                            "settings": "Paramètres",
                            "notifications": "Notifications",
                            "help": "Aide",
                            "changePassword": "Changer le Mot de Passe",
                            "logout": "Se Déconnecter"
                        }
                    }
                },
                de: {
                    translation: {
                        "title": "Wählen Sie Ihre Sprache",
                        "description": "Wählen Sie Ihre gewünschte Sprache aus und die Seite wird automatisch übersetzt.",
                        "sidebar": {
                            "profile": "Mein Profil",
                            "messages": "Nachrichten",
                            "settings": "Einstellungen",
                            "notifications": "Benachrichtigungen",
                            "help": "Hilfe",
                            "changePassword": "Passwort Ändern",
                            "logout": "Abmelden"
                        }
                    }
                },
                pt: {
                    translation: {
                        "title": "Escolha seu idioma",
                        "description": "Selecione o idioma desejado e a página será traduzida automaticamente.",
                        "sidebar": {
                            "profile": "Meu Perfil",
                            "messages": "Mensagens",
                            "settings": "Configurações",
                            "notifications": "Notificações",
                            "help": "Ajuda",
                            "changePassword": "Alterar Senha",
                            "logout": "Sair"
                        }
                    }
                },
                it: {
                    translation: {
                        "title": "Scegli la tua lingua",
                        "description": "Seleziona la lingua desiderata e la pagina verrà tradotta automaticamente.",
                        "sidebar": {
                            "profile": "Il mio Profilo",
                            "messages": "Messaggi",
                            "settings": "Impostazioni",
                            "notifications": "Notifiche",
                            "help": "Aiuto",
                            "changePassword": "Cambia Password",
                            "logout": "Esci"
                        }
                    }
                },
                ja: {
                    translation: {
                        "title": "言語を選択してください",
                        "description": "希望する言語を選択すると、ページが自動的に翻訳されます。",
                        "sidebar": {
                            "profile": "プロフィール",
                            "messages": "メッセージ",
                            "settings": "設定",
                            "notifications": "通知",
                            "help": "ヘルプ",
                            "changePassword": "パスワード変更",
                            "logout": "ログアウト"
                        }
                    }
                },
                ko: {
                    translation: {
                        "title": "언어를 선택하세요",
                        "description": "원하는 언어를 선택하면 페이지가 자동으로 번역됩니다.",
                        "sidebar": {
                            "profile": "내 프로필",
                            "messages": "메시지",
                            "settings": "설정",
                            "notifications": "알림",
                            "help": "도움말",
                            "changePassword": "비밀번호 변경",
                            "logout": "로그아웃"
                        }
                    }
                },
                zh: {
                    translation: {
                        "title": "选择你的语言",
                        "description": "选择你想要的语言，页面将自动翻译。",
                        "sidebar": {
                            "profile": "我的个人资料",
                            "messages": "消息",
                            "settings": "设置",
                            "notifications": "通知",
                            "help": "帮助",
                            "changePassword": "更改密码",
                            "logout": "登出"
                        }
                    }
                },
                ar: {
                    translation: {
                        "title": "اختر لغتك",
                        "description": "اختر اللغة التي تريدها وسيتم ترجمة الصفحة تلقائيًا.",
                        "sidebar": {
                            "profile": "ملفي الشخصي",
                            "messages": "الرسائل",
                            "settings": "الإعدادات",
                            "notifications": "الإشعارات",
                            "help": "المساعدة",
                            "changePassword": "تغيير كلمة المرور",
                            "logout": "تسجيل الخروج"
                        }
                    }
                },
                ru: {
                    translation: {
                        "title": "Выберите ваш язык",
                        "description": "Выберите желаемый язык, и страница будет автоматически переведена.",
                        "sidebar": {
                            "profile": "Мой Профиль",
                            "messages": "Сообщения",
                            "settings": "Настройки",
                            "notifications": "Уведомления",
                            "help": "Помощь",
                            "changePassword": "Изменить Пароль",
                            "logout": "Выйти"
                        }
                    }
                }
            }
        }, function(err, t) {
            updateContent();
        });

        function changeLanguage() {
            const language = document.getElementById('language').value;
            i18next.changeLanguage(language, updateContent);
        }

        function updateContent() {
            document.querySelectorAll('[data-i18n]').forEach(function(element) {
                const key = element.getAttribute('data-i18n');
                element.textContent = i18next.t(key);
            });
        }
    </script>

    <div class="footer">
        <a href="#">Language</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Need Help?</a>
        <a href="pagprincipal.html">Main Screen</a>
        <a href="#">New account</a>
    </div>
</body>
</html>
