document.addEventListener('DOMContentLoaded', function () {
    let flashMessage = document.getElementById('flash-msg');

    if (flashMessage) {
        flashMessage.style.display = 'block';

        setTimeout(function () {
            flashMessage.style.display = 'none';
        }, 5000);
    }
});
