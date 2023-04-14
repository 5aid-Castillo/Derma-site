// Elementos del DOM necesitados.
const cartIcon = document.querySelector('.cart-icon');
const carrito = document.querySelector('.cart');
const blurFullPage = document.querySelector('.blur');
const closeCartButton = document.querySelector('#closeCart');
const itemsWrap = document.querySelector('.boxes');
const contenedorCarrito = document.querySelector('.cart .itemsWrap');
const vaciarCarritoBtn = document.querySelector('.deleteItem'); 
const checkoutButton = document.querySelector('.checkout');




let numItemsSelector = document.querySelector('.cartNumItems');
let numsItem = 0;
let articulosCarrito = [];

// Función que carga los event listeners necesarios.
function cargarEventListeners() {

     // Cuando se elimina un curso del carrito
     carrito.addEventListener('click', eliminarItem);

     // cuando se da click en checkout
     checkoutButton.addEventListener('click', () => {
          window.location = "checkout.html";
     });



    cartIcon.addEventListener('click', () => {

        if (carrito.classList.contains('active')){
            carrito.classList.remove('active');
            blurFullPage.classList.remove('active');
        } else {
            carrito.classList.add('active');
            blurFullPage.classList.add('active');
        }
    });
    
    closeCartButton.addEventListener('click', () => {
    
            carrito.classList.remove('active');
            blurFullPage.classList.remove('active');
    });

     // NUEVO: Contenido cargado
     document.addEventListener('DOMContentLoaded', () => {
        articulosCarrito = JSON.parse( localStorage.getItem('carritoDermatologa') ) || []  ;
        // console.log(articulosCarrito);
        carritoHTML();
   });
}


// Función que muestra el carrito en el DOM
function showCarrito(){
     blurFullPage.classList.remove('active');
     carrito.classList.add('active');
}


// Lee los datos del item
function leerDatosItem(item) {
    const infoItem = {
         imagen: item.querySelector('#modalProductImage').src,
         nombre: item.querySelector('#modalProductName').textContent,
         descripcion: item.querySelector('#modalProductDescription').textContent,
         categoria: item.querySelector('#modalProductCategory').textContent,
         precio: parseInt(item.querySelector('#modalProductPrice').textContent.replace(/\D/g, "")),
         id: parseInt(item.getAttribute('idProduct')), 
         cantidad: parseInt(item.querySelector('#modalNumberItems').value)
    }

    // validar si un elemento ya existe en el carrito para solo aumentar su cantidad
    if( articulosCarrito.some( item => item.id === infoItem.id ) ) { 
         const items = articulosCarrito.map( item => {
              if( item.id === infoItem.id ) {
                   let cantidad = parseInt(item.cantidad);
                   item.cantidad = parseInt( infoItem.cantidad) + cantidad;
                   return item;
              } else {
                   return item;
              }
         })
         articulosCarrito = [...items];
    }  else {
         articulosCarrito = [...articulosCarrito, infoItem];
    }

    carritoHTML();
}

// Elimina el item del carrito en el DOM
function eliminarItem(e) {
    e.preventDefault();
    if(e.target.classList.contains('deleteItem') ) {
         const item = e.target.parentElement.parentElement;
         const itemId = parseInt(item.querySelector('a').getAttribute('data-id'));
         
         // Eliminar del arreglo del carrito
         articulosCarrito = articulosCarrito.filter(item => item.id !== itemId);

         carritoHTML();
    }
}

function agregarItem(e) {
     e.preventDefault();
     // Delegation para agregar-carrito
     
     if(e.target.classList.contains('addToCart')) {
          const item = e.target.parentElement.parentElement;
          // Enviamos el item seleccionado para tomar sus datos
          leerDatosItem(item);
     }
 
     // cerramos el modal
     if (window.getComputedStyle(itemModal).display == 'flex' ){
      itemModal.style.display = 'none';
     }
 
     // mostramos el carrito
     showCarrito();
 
 
 
 
 }

// Muestra el item seleccionado en el Carrito
function carritoHTML() {

    vaciarCarrito();

     if (articulosCarrito.length == 0){
          const p = document.createElement('p');
          p.textContent = "Carrito vacio";
          contenedorCarrito.appendChild(p);
          contenedorCarrito.classList.add("empty");

     }else {
          contenedorCarrito.classList.remove("empty"); 
     }
    articulosCarrito.forEach(item => {
         const row = document.createElement('div');
         row.classList.add("itemInCart");
         row.innerHTML = `
              <div class='imgItem'>  
                   <img src="${item.imagen}" alt="${item.titulo}">
              </div>
              <div class='contentItem'>  
                    <p class='titleItem'>${item.nombre}</p>
                    <p class='priceItem'>$${item.precio}.00 MXN</p>
                    <p class='priceItem'>x${item.cantidad}</p>
                   
              </div>
             <div class='deleteItemCart'>  
               <a href="#" class='deleteItem' data-id=${item.id}>X</a>
             </div> 
         `;
         contenedorCarrito.appendChild(row);
    });

    numsItem = articulosCarrito.length;
    numItemsSelector.textContent = `Cart (${numsItem})`;

    // Actualiza los datos en el local storage
    sincronizarStorage();

}


 // Actualiza los datos en el local storage
function sincronizarStorage() {
    localStorage.setItem('carritoDermatologa', JSON.stringify(articulosCarrito));
}

// Elimina los cursos del carrito en el DOM
function vaciarCarrito() {
    // forma rapida (recomendada)
    while(contenedorCarrito.firstChild) {
         contenedorCarrito.removeChild(contenedorCarrito.firstChild);
     }
}

const App = () => {
     // cargamos los Event listeners
     cargarEventListeners();
}

// Mandamos a llamar a la función principal
App();