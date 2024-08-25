
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

