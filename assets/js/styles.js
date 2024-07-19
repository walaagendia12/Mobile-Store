window.onscroll = () => {
    if(window.scrollY >= 130){
        document.querySelector('.nav-header').style.background = "#ff6d00";
        document.querySelector('.cart-btn').classList.add('scroll');
        document.querySelector('.navbar-brand').classList.add('scroll');
    } else {
        document.querySelector('.nav-header').style.background = "transparent";
        document.querySelector('.cart-btn').classList.remove('scroll');
        document.querySelector('.navbar-brand').classList.remove('scroll');
    }
}
window.onload = () => {
    if(window.scrollY >= 130){
        document.querySelector('.nav-header').style.background = "#ff6d00";
        document.querySelector('.cart-btn').classList.add('scroll');
    } else {
        document.querySelector('.nav-header').style.background = "transparent";
        document.querySelector('.cart-btn').classList.remove('scroll');
    }
}