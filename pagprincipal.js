document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    const fileInput = document.getElementById('upload');
    const captionInput = document.getElementById('caption');
    const file = fileInput.files[0];
    const caption = captionInput.value;

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = 'Nova Foto';

            const photoItem = document.createElement('div');
            photoItem.className = 'photo-item';

            if (caption) {
                const captionElement = document.createElement('p');
                captionElement.className = 'caption';
                captionElement.textContent = caption;
                photoItem.appendChild(captionElement);
            }

            const likeButton = document.createElement('button');
            likeButton.innerHTML = '👍';
            likeButton.className = 'like-button';
            likeButton.addEventListener('click', function() {
                likeButton.classList.add('selected');
                dislikeButton.classList.remove('selected');
            });

            const dislikeButton = document.createElement('button');
            dislikeButton.innerHTML = '👎';
            dislikeButton.className = 'dislike-button';
            dislikeButton.addEventListener('click', function() {
                dislikeButton.classList.add('selected');
                likeButton.classList.remove('selected');
            });

            const deleteButton = document.createElement('button');
            deleteButton.innerHTML = '🗑️';
            deleteButton.className = 'delete-button';
            deleteButton.addEventListener('click', function() {
                photoItem.remove();
            });

            photoItem.appendChild(img);
            photoItem.appendChild(likeButton);
            photoItem.appendChild(dislikeButton);
            photoItem.appendChild(deleteButton);

            document.getElementById('photoGallery').appendChild(photoItem);

            captionInput.value = '';
            fileInput.value = '';
        };
        reader.readAsDataURL(file);
    }
});

document.getElementById('textForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    const textInput = document.getElementById('sharedText');
    const text = textInput.value;

    if (text) {
        const textItem = document.createElement('div');
        textItem.className = 'text-item';
        textItem.textContent = text;

        const likeButton = document.createElement('button');
        likeButton.innerHTML = '👍';
        likeButton.className = 'like-button';
        likeButton.addEventListener('click', function() {
            likeButton.classList.add('selected');
            dislikeButton.classList.remove('selected');
        });

        const dislikeButton = document.createElement('button');
        dislikeButton.innerHTML = '👎';
        dislikeButton.className = 'dislike-button';
        dislikeButton.addEventListener('click', function() {
            dislikeButton.classList.add('selected');
            likeButton.classList.remove('selected');
        });

        const deleteButton = document.createElement('button');
        deleteButton.innerHTML = '🗑️';
        deleteButton.className = 'delete-button';
        deleteButton.addEventListener('click', function() {
            textItem.remove();
        });

        textItem.appendChild(likeButton);
        textItem.appendChild(dislikeButton);
        textItem.appendChild(deleteButton);

        document.getElementById('textGallery').appendChild(textItem);

        textInput.value = '';
    }
});

const emojis = ['😀', '😂', '😍', '🥺', '😎', '😢', '👍', '🙏', '💪', '🎉', '❤️'];

function createEmojiPicker(button, inputField) {
    const picker = document.createElement('div');
    picker.className = 'emoji-picker';

    emojis.forEach(emoji => {
        const emojiButton = document.createElement('button');
        emojiButton.textContent = emoji;
        emojiButton.addEventListener('click', () => {
            inputField.value += emoji;
            picker.style.display = 'none';
        });
        picker.appendChild(emojiButton);
    });

    button.parentNode.appendChild(picker);

    button.addEventListener('click', () => {
        picker.style.display = picker.style.display === 'none' || picker.style.display === '' ? 'flex' : 'none';
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const captionInput = document.getElementById('caption');
    const emojiBtnCaption = document.getElementById('emojiBtnCaption');
    createEmojiPicker(emojiBtnCaption, captionInput);

    const sharedTextInput = document.getElementById('sharedText');
    const emojiBtnText = document.getElementById('emojiBtnText');
    createEmojiPicker(emojiBtnText, sharedTextInput);
});
