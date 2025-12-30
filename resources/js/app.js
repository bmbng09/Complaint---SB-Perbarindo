import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("scroll", () => {
    const nav = document.getElementById("navbar");

    if (window.scrollY > 50) {
        nav.classList.remove("bg-white/10");
        nav.classList.add("bg-black/60");
    } else {
        nav.classList.add("bg-white/10");
        nav.classList.remove("bg-black/60");
    }
});
