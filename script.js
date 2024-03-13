// selecting the navbar and menu
let navbar = document.querySelector('.header .navbar');
let menu = document.querySelector('#menuBtn');




// onclick function for menu
menu.onclick = () =>{
    // menu to toggle to fa timws meaning x icon
menu.classList.toggle('fa-times');
// select active from css to connect to navbar
navbar.classList.toggle('active');
}