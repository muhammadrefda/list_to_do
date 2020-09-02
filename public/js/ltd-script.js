const navToggle = document.querySelector('.navbar-toggle input');
const nav = document.querySelector('nav ul');

navToggle.addEventListener('click', () => {

    nav.classList.toggle('slide');
});
