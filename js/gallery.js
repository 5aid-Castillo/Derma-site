let galleryWrap = document.querySelector('.gallery-wrap');
let modalWrap = document.querySelector('.modal-wrap');
let imgModal = document.querySelector('.modal-img');
let prevButton = document.querySelector('.prev-button');
let nextButton = document.querySelector('.next-button');


function showModalWithImage(image){
    modalWrap.style.display = 'flex';
    // Cambiamos la imagen por la que se dio click.
    let imgSource = image.src;
    let imgData = image.attributes.data.value;  // Accedemos al atributo de data de la imagen.
    imgModal.src = imgSource;
    imgModal.setAttribute("data",imgData); // seteamos el atributo data a la nueva imagen
}

function wrapClick(e){
    if(e.target.classList.contains('img')) {
         const image = e.target;
         // Enviamos el curso seleccionado para tomar sus datos
         showModalWithImage(image);
    }
}

// Función que busca una imagen en base a un id
function searchImage(dataId){
    let images = document.querySelectorAll('.img');
    let img = null;
    images.forEach(item => {
        if(item.attributes.data.value == dataId){
            img = item;
        }
    });
    return img;
}

// Función que cambia una imagen por la seleccionada.
function changeImage(e) {
    let dataImg = imgModal.attributes.data.value;
    let newDataAttribute = null;
    if (e.target.classList.contains('next-button')) {
        if (dataImg == 12)
            newDataAttribute = 1;
        else 
            newDataAttribute =  parseInt(dataImg)+1;  
    } else {
        if (dataImg == 1)
            newDataAttribute = 12;
        else 
            newDataAttribute =  parseInt(dataImg)-1;  
    }
    let newImage = searchImage(newDataAttribute);
    imgModal.src = newImage.src;
    imgModal.attributes.data.value = newDataAttribute; 
}

// Función que sale del modal de imagén al dar click en boton
function exitModal(e){
    if (e.target.classList.contains('modal-wrap') && modalWrap.style.display == 'flex' ){
        modalWrap.style.display = 'none';
    }

}

// Event listeners de modales e imagenes.

modalWrap.addEventListener('click', exitModal);
galleryWrap.addEventListener('click', wrapClick);
prevButton.addEventListener('click', changeImage);
nextButton.addEventListener('click', changeImage);