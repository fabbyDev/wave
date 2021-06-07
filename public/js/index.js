let slide = document.getElementById('principal-splide')
let loader = document.querySelector('.container__loader')

AOS.init({
    startEvent: 'DOMContentLoaded',
});

window.onload = function(){
    loader.style.opacity = '0'
    loader.style.display = 'none'
}

window.onscroll = function(){
    if(window.scrollY >= 508){
        header.classList.add('fixed-header')
        header.querySelector('.header').style.padding = '.8em 1.6em'
   }else{
        header.classList.remove('fixed-header')
   }
}


new Splide(slide,{
    type: 'fade',
    rewind: true,
    autoplay: true,
    interval: 2000,
    classes: {
        prev  : 'splide__arrow--prev',
        next  : 'splide__arrow--next',
    },
}).mount();

new Splide('#products-splide',{
    type: 'fade',
    rewind: true,
    autoplay: true,
    interval: 2500,
    arrows: false,
    pagination: false
}).mount();

new Splide('#benefits-splide',{
    type: 'fade',
    rewind: true,
    autoplay: true,
    interval: 2000,
    arrows: false,
    pagination: false
}).mount();

new Splide('#marks-splide',{
    type: 'slide',
    perPage: 4,
    rewind: true,
    pagination: false,
    breakpoints: {
		994: {
			perPage: 2,
		},
        500:{
            perPage: 1,
        }
	}
}).mount();
