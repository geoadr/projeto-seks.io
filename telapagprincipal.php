<?PHP
include "Postagem.php";
include "Conexao.php";
include "PostagemDAO.php";

$msg = "";

if (!empty($_POST)){
    $objeto = new Postagem();
    $objeto->set("figura_nome", $_FILES["upload"]);
    $objeto->set("id_perfil",1);

 
    
    //Percorre a Variável Global $_POST
    foreach($_POST as $chave=>$botao) {
        
        if($botao == "Postar"){
            echo "SAIU TBM";
            $objeto->cadastrar_figura();
            echo "SAIU";
            $msg = $objeto->gravarimagem();
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
              <li><a href="pagprincipal.php">Início</a></li>
              <li><a href="telaPerfil.php">Perfil</a></li>
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
              <form id="uploadForm" method="post" enctype="multipart/form-data">
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
                  <button type="submit" value="Postar" >Postar</button>
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
                  <button type="submit" Value="pensamento" id="Entrar" name="Entrar">Compartilhar</button>
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
      <a href="TelaCadastro.php">New account</a>
  </div>
  <script src="pagpricipal.js"></script>
    <script>
        /*document.getElementById('uploadForm').addEventListener('submit', function(event) {
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
        });*/
    </script>

<?php
        $count = 0;
        $objeto2 = new Postagem();
       
        if ($objeto2->consultar() != null) {
           
            foreach ($objeto2->consultar() as $valor) {
                echo ('<div>');
                 echo ("<img src='fotos_". $valor['id_perfil'] . "/". $valor['figura_nome'] ."'>");
                 echo ('<div class="like-dislike-buttons">');
                 echo ('<button class="save-button">⬇️</button>');
                 echo ('<button class="delete-button" value="Excluir">🗑️</button>');
                 echo ('</div>');
            }
        }

        ?>

</body>
</html>
