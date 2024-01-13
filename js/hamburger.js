const hamburger = document.querySelector('.hamburger--js');
const navigation = document.querySelector('.navigation');


hamburger.addEventListener('click', () => {
    const nav = document.querySelector('.navigation__list');
    nav.classList.toggle('navigation__list--visible');
});

navigation.addEventListener('click', () => {
    const nav = document.querySelector('.navigation__list');
    nav.classList.toggle('navigation__list--visible');
});