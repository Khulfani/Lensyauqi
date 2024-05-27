import './bootstrap';
import.meta.glob([
    '../images/**'
]);
import 'flowbite';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const itemsKualitas = document.querySelector('.rating-kualitas');
const itemsLayanan = document.querySelector('.rating-layanan');
const inputKualitas = document.querySelector('.input-kualitas');
const inputLayanan = document.querySelector('.input-layanan');

let choosed = [0, 0];

if (itemsKualitas && itemsLayanan) {
    for (let i = 0; i < 5; i++) {
        itemsKualitas.children[i].addEventListener('click', () => {
            if (choosed[0] <= i) {
                for (let j = 0; j <= i; j++) {
                    itemsKualitas.children[j].classList.remove('bi-star');
                    itemsKualitas.children[j].classList.add('bi-star-fill');
                }
            } else {
                for (let j = choosed[0]; j > i; j--) {
                    itemsKualitas.children[j].classList.remove('bi-star-fill');
                    itemsKualitas.children[j].classList.add('bi-star');
                }
            }
            choosed[0] = i;
            inputKualitas.value = choosed[0] + 1;
        });
    }

    for (let i = 0; i < 5; i++) {
        itemsLayanan.children[i].addEventListener('click', () => {
            if (choosed[1] <= i) {
                for (let j = 0; j <= i; j++) {
                    itemsLayanan.children[j].classList.remove('bi-star');
                    itemsLayanan.children[j].classList.add('bi-star-fill');
                }
            } else {
                for (let j = choosed[1]; j > i; j--) {
                    itemsLayanan.children[j].classList.remove('bi-star-fill');
                    itemsLayanan.children[j].classList.add('bi-star');
                }
            }
            choosed[1] = i;
            inputLayanan.value = choosed[1] + 1;
        });
    }
}
