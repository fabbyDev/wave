let header = document.querySelector(".container__header")
let nav_hamburger = document.getElementById('hamburger-nav')
let header_navigation = document.querySelector('.header__navigation')
let close_nav = document.querySelector('.header__navigation')

nav_hamburger.addEventListener('click',()=> header_navigation.classList.toggle('nav_show'))
close_nav.addEventListener('click',()=> header_navigation.classList.toggle('nav_show'))
