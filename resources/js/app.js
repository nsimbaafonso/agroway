import './bootstrap';

const btn = document.getElementById('menu-btn');
const menu = document.getElementById('menu');
const icon = document.getElementById('menu-icon');
const header = document.getElementById('header');

let open = false;

btn.addEventListener('click', () => {
    open = !open;

    // animação menu
    menu.classList.toggle('opacity-0');
    menu.classList.toggle('scale-95');
    menu.classList.toggle('pointer-events-none');

    // troca ícone
    icon.classList.toggle('fa-bars');
    icon.classList.toggle('fa-xmark');

    // animação ícone
    icon.classList.add('rotate-180');
    setTimeout(() => {
        icon.classList.remove('rotate-180');
    }, 300);
});

// efeito blur no scroll
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('bg-green-950/80', 'backdrop-blur-lg', 'shadow-lg');
    } else {
        header.classList.remove('bg-green-950/80', 'backdrop-blur-lg', 'shadow-lg');
    }
});

