
// Función que calcula todos los precios, cambia textos y renderiza textos en HTML de pago.
function addAll(){
    Subtotal = 0;
    total = 0;
    articulosCarrito = JSON.parse( localStorage.getItem('carritoDermatologa') ) || []  ;
    sacarTotal();
    addItems();
    addListeners();
    changeTexts();
    changeNumberItems();
    deleteProductButtons = document.querySelectorAll('.delete-product');
    deleteProductButtons.forEach(item => { item.addEventListener('click', eliminarItem)});

    quantityInputs = document.querySelectorAll('.quantityInput');
    quantityInputs.forEach(item => { item.addEventListener('change', updateQuantity)})
}
 
 window.addEventListener('DOMContentLoaded', (event) => {
    addAll();
});

 let quantityInputs = null;
 const itemsWrap_checkout = document.querySelector(".items-carrito");
 const SubtotalPrice = document.querySelector(".precio");
 const totalText = document.querySelector('#totalText');
 const totalButton = document.querySelector('#totalButton');
 const discountInput = document.querySelector('#discountInput');
 let deleteProductButtons = null;

 let Subtotal = 0;
 let total = 0;
 
 // Función que calcula el total de la compra.
function sacarTotal(){
    articulosCarrito.forEach(element => {
        precio = element.precio * element.cantidad;
        
        Subtotal += precio;
        total = Subtotal;
     });
}
// Función que actualiza la cantidad de un producto
function updateQuantity(e){
    let newQuantity = parseInt(e.target.value);
    let idProduct = parseInt(e.target.parentElement.parentElement.getAttribute('id'));

    const cursos = articulosCarrito.map( curso => {
            if( curso.id === idProduct ) {
                let cantidad = parseInt(curso.cantidad);
                curso.cantidad = newQuantity;
                return curso;
            } else {
                return curso;
            }
    })
    articulosCarrito = [...cursos];
    localStorage.setItem('carritoDermatologa', JSON.stringify(articulosCarrito));
    addAll();

}
// Función que parsea un texto dependiendo si tiene 1 o más artículos.
function changeNumberItems(){
    if (articulosCarrito.length < 2) {
        document.querySelector('.quantity-text').textContent =` ${articulosCarrito.length} artículo`;
        document.querySelector('.quantity-text-2').textContent =` ${articulosCarrito.length} artículo`;
    } else {
        document.querySelector('.quantity-text').textContent =` ${articulosCarrito.length} artículos`;
        document.querySelector('.quantity-text-2').textContent =` ${articulosCarrito.length} artículos`;
    }
}
// Función que parsea un pago total.
function renderNewTotalPrices(totalNuevo){
    totalButton.textContent = `PAGAR $${totalNuevo}.00 MXN`;
}
// Función que añade un descuento a un producto.
function addDiscountText(cantidad){
    document.querySelector('.descuento').style.display = 'flex';
    document.querySelector('#discountText').textContent  = `$ ${cantidad}.00 MXN`;
}
// Función que valida un descuento
function checkDescuento(data){
    if (data != false) {
        const descuento = Math.ceil(data.cantidad/100 *  Subtotal);
        addDiscountText(descuento);
        renderNewTotalPrices(Subtotal - descuento);
        total = Subtotal - descuento;
    }
}
// Función que valida si un descuento está disponible mediante API.
function handleDiscount(){
    let inputValue = document.querySelector("#discountInput").value;
    // Se llama a la API mediante axios.
    axios.get(`./api?peticion=descuento&nombre=${inputValue}`).then(resp => {
        items = resp.data;
        checkDescuento(items)
    });
}

// Función que limpia el HTML del checkout
function limpiarHTML(){
        // forma rapida (recomendada)
        while(itemsWrap_checkout.firstChild) {
            itemsWrap_checkout.removeChild(itemsWrap_checkout.firstChild);
        }
}

// Función que añade los items del carrito a HTML
function addItems(){

    limpiarHTML();

  articulosCarrito.forEach(element => {
     const item = document.createElement('div');
     item.classList.add("itemCheck");
     item.innerHTML = `
     <div class="item" id="${element.id}">
        <div class="info-item">
            <img src="${element.imagen}" alt="">
            <div class="info">
            <p class="categoria">${element.categoria}</p>
            <p class="nombre">${element.nombre} <span>x${element.cantidad}</span></p>
            </div>
        </div>
        <div class="cantidad">
            <input type="number" min="0" class="quantityInput" value=${parseInt(element.cantidad)}> 
            <p class="price">$ ${element.precio}.00 MXN</p>
            <button class="delete-product">x</button>                   
        </div>
      </div> 
        `;
     itemsWrap_checkout.appendChild(item);
  });

}
 // Función que elimina un item del carrito y del checkout
function eliminarItem(e) {
    e.preventDefault();
    if(e.target.classList.contains('delete-product') ) {
         e.target.parentElement.parentElement.remove();
         const curso = e.target.parentElement.parentElement;
         const cursoId = parseInt(curso.getAttribute('id'));
         
         // Eliminar del arreglo del carrito
         articulosCarrito = articulosCarrito.filter(curso => curso.id !== cursoId);

         carritoHTML();
         addAll();
    }
}
// Función que añade event listeners a botones
function addListeners(){
    totalButton.addEventListener('click', (e) => {
    })
    discountInput.addEventListener('change', handleDiscount)
}
 
// Función que añade textos a números del checkout
function changeTexts(){
    SubtotalPrice.textContent = `$ ${Subtotal}.00 MXN`;
    totalText.textContent = `$ ${total}.00 MXN`;
    totalButton.textContent = `PAGAR $${total}.00 MXN`;
}
