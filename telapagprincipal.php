<?php
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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEKS.IO</title>
    <link rel="stylesheet" href="cssPagprincipal.css">

</head>
<body>




    <div class="container">
      
        <aside class="sidebar">
            <ul>
                <li><a href="login.html">Início</a></li>
                <li><a href="perfil.html">Perfil</a></li>
                <li><a href="chat.html">Mensagens</a></li>
                <li><a href="sugestoes.html">Amigos</a></li>
                <li><a href="configuracoes.html">Configurações</a></li>
                <li><a href="sobrenos.html">Sobre nós</a></li>
            </ul>
        </aside>

        <main class="main-content">
            <h1>Bem-vindo ao SEKS.IO</h1>

            <section class="photo-upload">
                <h2>Postar Foto</h2>
                <form id="uploadForm">
                    <input type="file" id="upload" name="upload" accept="image/*" required>
                    <div class="emoji-container">
                        <input type="text" id="caption" name="caption" placeholder="Adicione uma legenda com emojis" maxlength="100">
                        <button type="button" id="emojiBtnCaption">😀</button>
                        <div class="emoji-picker" id="emojiPickerCaption">
                            <button type="button">😊</button>
                            <button type="button">😂</button>
                            <button type="button">😍</button>
                            <button type="button">🤔</button>
                            <button type="button">😎</button>
                            <button type="button">🥳</button>
                            <button type="button">🤩</button>
                            <button type="button">😢</button>
                            <button type="button">😡</button>
                            <button type="button">🥺</button>
                            <button type="button">🤯</button>
                            <button type="button">😴</button>
                            <button type="button">😱</button>
                            <button type="button">🧐</button>
                            <button type="button">🤠</button>
                            <button type="button">🤤</button>
                            <button type="button">🤑</button>
                            <button type="button">🤗</button>
                            <button type="button">😷</button>
                            <button type="button">😺</button>
                            <button type="button">👻</button>
                            <button type="button">💩</button>
                            <button type="button">👀</button>
                            <button type="button">👐</button>
                            <button type="button">✌️</button>
                            <button type="button">👏</button>
                            <button type="button">🤲</button>
                            <button type="button">🙌</button>
                            <button type="button">🙏</button>
                            <button type="button">🤝</button>
                            <button type="button">💪</button>
                            <button type="button">👊</button>
                            <button type="button">👌</button>
                        </div>
                    </div>
                    <button type="submit">Postar</button>
                </form>
            </section>

            <div class="photo-gallery" id="photoGallery">
         
            </div>
            
           
            <section class="text-share">
                <h2>Compartilhar pensamentos</h2>
                <form id="textForm">
                    <div class="emoji-container">
                        <textarea id="sharedText" name="sharedText" rows="4" placeholder="Compartilhe seus pensamentos..."></textarea>
                        <button type="button" id="emojiBtnText">😀</button>
                        <div class="emoji-picker" id="emojiPickerText">
                            <button type="button">😊</button>
                            <button type="button">😂</button>
                            <button type="button">😍</button>
                            <button type="button">🤔</button>
                            <button type="button">😎</button>
                            <button type="button">🥳</button>
                            <button type="button">🤩</button>
                            <button type="button">😢</button>
                            <button type="button">😡</button>
                            <button type="button">🥺</button>
                            <button type="button">🤯</button>
                            <button type="button">😴</button>
                            <button type="button">😱</button>
                            <button type="button">🧐</button>
                            <button type="button">🤠</button>
                            <button type="button">🤤</button>
                            <button type="button">🤑</button>
                            <button type="button">🤗</button>
                            <button type="button">😷</button>
                            <button type="button">😺</button>
                            <button type="button">👻</button>
                            <button type="button">💩</button>
                            <button type="button">👀</button>
                            <button type="button">👐</button>
                            <button type="button">✌️</button>
                            <button type="button">👏</button>
                            <button type="button">🤲</button>
                            <button type="button">🙌</button>
                            <button type="button">🙏</button>
                            <button type="button">🤝</button>
                            <button type="button">💪</button>
                            <button type="button">👊</button>
                            <button type="button">👌</button>
                        </div>
                    </div>
                    <button type="submit">Compartilhar</button>
                </form>
                <div class="texts" id="textGallery">
                    
                </div>
            </section>
        </main>
    </div>
    <div class="footer">
        <a href="#">Lenguage</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Need Help?</a>
        <a href="pagprincipal.html">Main Screen</a>
        <a href="#">New account</a>
    </div>

    <script src="pagpricipal.js"></script>
    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const fileInput = document.getElementById('upload');
            const captionInput = document.getElementById('caption');

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = new Image();
                    img.src = e.target.result;

                    const caption = captionInput.value || '';
                    const photoItem = document.createElement('div');
                    photoItem.className = 'photo-item';
                    photoItem.innerHTML = `
                        <img src="${img.src}" alt="${caption}">
                        <p class="caption">${caption}</p>
                        <div class="like-dislike-buttons">
                            <button class="like-button">👍< <span class="count">0</span></button>
                            <button class="dislike-button">👎 <span class="count">0</span></button>
                            <button class="save-button">⬇️</button>
                            <button class="delete-button">🗑️</button>
                        </div>
                    `;
                    document.getElementById('photoGallery').appendChild(photoItem);
                    fileInput.value = ''; 
                    captionInput.value = ''; 
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('textForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const sharedText = document.getElementById('sharedText').value;
            const textItem = document.createElement('div');
            textItem.className = 'text-item';
            textItem.innerHTML = `
                <p>${sharedText}</p>
                <div class="like-dislike-buttons">
                    <button class="delete-button">🗑️</button>
                </div>
            `;
            document.getElementById('textGallery').appendChild(textItem);
            document.getElementById('sharedText').value = ''; 
        });

        document.addEventListener('click', function(event) {
            const emojiPickerCaption = document.getElementById('emojiPickerCaption');
            const emojiPickerText = document.getElementById('emojiPickerText');

            if (event.target.id === 'emojiBtnCaption') {
                emojiPickerCaption.style.display = emojiPickerCaption.style.display === 'none' || emojiPickerCaption.style.display === '' ? 'block' : 'none';
            } else if (event.target.id === 'emojiBtnText') {
                emojiPickerText.style.display = emojiPickerText.style.display === 'none' || emojiPickerText.style.display === '' ? 'block' : 'none';
            } else if (emojiPickerCaption && !emojiPickerCaption.contains(event.target)) {
                emojiPickerCaption.style.display = 'none';
            } else if (emojiPickerText && !emojiPickerText.contains(event.target)) {
                emojiPickerText.style.display = 'none';
            }

            if (event.target.closest('.emoji-picker button')) {
                const emoji = event.target.innerText;
                const inputField = event.target.closest('.emoji-container').querySelector('input, textarea');
                inputField.value += emoji;
            }

            if (event.target.classList.contains('delete-button')) {
                event.target.closest('.photo-item, .text-item').remove();
            }

            if (event.target.classList.contains('like-button')) {
                const likeButton = event.target;
                const countSpan = likeButton.querySelector('.count');
                let count = parseInt(countSpan.innerText) || 0;
                countSpan.innerText = ++count;
                likeButton.classList.add('liked');
                likeButton.classList.remove('disliked');
            } else if (event.target.classList.contains('dislike-button')) {
                const dislikeButton = event.target;
                const countSpan = dislikeButton.querySelector('.count');
                let count = parseInt(countSpan.innerText) || 0;
                countSpan.innerText = ++count;
                dislikeButton.classList.add('disliked');
                dislikeButton.classList.remove('liked');
            }

            if (event.target.classList.contains('save-button')) {
                const img = event.target.closest('.photo-item').querySelector('img');
                const link = document.createElement('a');
                link.href = img.src;
                link.download = 'foto.jpg';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        });
    </script>
</body>
</html>
