let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
  // menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}


$(document).ready(function(){
  $('#menu-bars').on('click', function(){
    var swapImage = $('#menu-bars').attr('data-swap'),
        currentImage = $('#menu-bars').attr('src');

    $('#menu-bars').attr({
        'src': swapImage,
        'data-swap': currentImage
    });
  });
});


// Scroll Reveal


ScrollReveal().reveal('.hero-section .content', { delay: 200 });
ScrollReveal().reveal('.how-it-works .top-description h2', { delay: 200 });
ScrollReveal().reveal('.how-it-works .top-description p', { delay: 200 });
ScrollReveal().reveal('.how-it-works .inner-content .cards .card', { delay: 200 });
ScrollReveal().reveal('.why-chose-companies .cards .card', { delay: 200 });
ScrollReveal().reveal('.about-members .inner-content h1', { delay: 200 });
ScrollReveal().reveal('.about-members .inner-content p', { delay: 200 });
ScrollReveal().reveal('.campaign-section .campaign-title', { delay: 200 });
ScrollReveal().reveal('.campaign-section .main-cards .left-card', { delay: 200 });
ScrollReveal().reveal('.campaign-section .main-cards .right-card', { delay: 200 });
ScrollReveal().reveal('.footer2 .row', { delay: 200 });




