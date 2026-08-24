// Hamburger 
const hamburger = document.querySelector('#hamburger')
const menu = document.querySelector('#menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    menu.classList.toggle('hidden');
});

// Navbar Fixed
window.onscroll = function(){
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;


    if(window.pageYOffset > fixedNav){
        header.classList.add('navbar-fixed')
    }else {
        header.classList.remove('navbar-fixed')
    }
};