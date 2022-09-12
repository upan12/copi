let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

// let loginForm = document.querySelector('.login-form');

// document.querySelector('#login-btn').onclick = () =>{
//     loginForm.classlist.add('active');
//     // navbar.classList.remove('active');
//     // searchForm.classList.remove('active');
// }
// document.querySelector('#close-login-form').onclick = () =>{
//     loginForm.classlist.remove('active');
    
// }

// window.onscroll = () =>{
//     loginForm.classlist.remove('active');

//     if(window.scrollY > 0){
//         document.querySelector('.header').classlist.add('active');
//     }else{
//         document.querySelector('header').classlist.remove('active');
//     }
// }