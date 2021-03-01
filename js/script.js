let btns = document.querySelectorAll('.shine-button');
let images = document.querySelectorAll('.change');
for (i = 0; i < 2; i++) {
    btns[i].addEventListener('click', function (evt) {
        evt.preventDefault();

        for (j = 0; j < 2; j++) {
            images[j].classList.toggle('hidden');
        }
        for (j = 0; j < 2; j++) {
            btns[j].classList.toggle('hidden');
        }
    });
}