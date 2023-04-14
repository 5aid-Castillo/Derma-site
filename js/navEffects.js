// Elementos a modificar

let hamburguer = document.querySelector('.hamburger');
let nav = document.querySelector('header nav ul');

// Función que dependiendo del tamaño de pantalla se vuelve responsive
function displayWindowSize() {
    myWidth = window.innerWidth;
    if (myWidth > 916 && nav.classList.contains('active')) {
        nav.classList.remove('active');
    }
};

// Event Listeners de botón hamburger para cambiar estilos de active en css.
window.onresize = displayWindowSize
hamburguer.addEventListener('click', () => {
    if (nav.classList.contains('active')){
        nav.classList.remove('active');
        hamburguer.classList.remove('active');
    } else {
        nav.classList.add('active');
        hamburguer.classList.add('active');
    }

})