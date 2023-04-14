let itemModal = document.querySelector('.item-modal');
let itemsWrapper = document.querySelector('.boxes');
let filtrarSelect = document.querySelector('#filtrar-select')
let ordenarSelect = document.querySelector('#ordenar-select')
let productsWrapper = document.querySelector('.products-wrapper');
let items = [];

/* links para filtrar */

let linkDermo = document.querySelector('.filter-dermo');
let linkCosme = document.querySelector('.filter-cosme');
let linkDeriv = document.querySelector('.filter-deriv');
let linkConsul = document.querySelector('.filter-consul');
let linkPromo = document.querySelector('.filter-promo');
let linkServ = document.querySelector('.filter-serv');

// Función que obtiene los productos de API
getItemsFromApi();


// Función que sale del modal
function exitModal(e){

	if (e.target.classList.contains('item-modal') && window.getComputedStyle(itemModal).display == 'flex' ){
        itemModal.style.display = 'none';
    }
}


// Función que muestra los productos de la API en HTML
function mostrarDataEnHtml(allObjs){

    // iteramos por todos los objetos del arreglo
    allObjs.forEach(obj => {
        //sacamos los datos importantes del obj
        nombreProducto = obj[1];
        descripcionProducto = obj[2];
        precioProducto = obj[3];
        imagenProducto = obj[4];
        promoProducto = obj[5];
        categoriaProducto = obj[6];
        idProducto = obj[0];
        // por cada uno creamos un div item
        const item = document.createElement('div');
        item.classList.add("item");
        item.setAttribute('id', idProducto)
        item.innerHTML = `
                    <div class="etiqueta ${promoProducto}">
                    <div class="triangle"></div>
                    <p class="text">${promoProducto}</p>
                </div>

                <div class="item-image">
                    <img src="api/Controllers/imgProducts/${imagenProducto}" alt="">
                </div>
                <div class="item-info">
                    <p class="item-name">${nombreProducto}</p>
                    <p class="item-price">$ ${precioProducto}.00 MXN</p>
                </div>          
        `;
        itemsWrapper.appendChild(item);      
    });

    let productItem = document.querySelectorAll('.item');
    productItem.forEach((item) => {item.addEventListener('click', clickOnItemCard)});
}

// Función que parsea los numeros por nombres de categorías
function changeIdOfCategoryToName(){
    items.forEach(item => {
        if (item.categoria == '1') 
            item.categoria = 'Dermofarmacia';
        else if (item.categoria == '2')
            item.categoria = 'Cosmeticos';
        else if (item.categoria == '3')
            item.categoria = 'Derivados Naturales';
        else if (item.categoria == '4')
            item.categoria = 'Promociones';
        else if (item.categoria == '5')
            item.categoria = 'Consultas';
        else if (item.categoria == '6')
            item.categoria = 'Otros Servicios';
    });
}

// Función que accede a la API y retorna los objetos
function getItemsFromApi(){
    // URL de API
    axios.get('./api?peticion=allProducts').then(resp => {
        items = resp.data;
        changeIdOfCategoryToName();
        mostrarDataEnHtml(items)
    });
}

// Funcion que retorna un item dado un id
function getDataOfElement(Objectid){
    let dataObj = items.filter( item => item.id == Objectid )[0];
    return dataObj;
}


// Función que cambia el HTML por la información del elemento seleccionado (id)
function changeDataOfModal(Objectid){
    let dataObj = getDataOfElement(Objectid);

    // querySelectors para elementos del modal

    let modalProductCategory = document.querySelector('#modalProductCategory');
    let modalProductName = document.querySelector('#modalProductName');
    let modalProductDescription = document.querySelector('#modalProductDescription');
    let modalProductPrice = document.querySelector('#modalProductPrice');
    let modalProductImage = document.querySelector('#modalProductImage');
    let modalInfoSelectedProductWrap = document.querySelector('.info-selected-product');

    // cambio de valores

    modalProductName.textContent = dataObj.nombre;
    modalProductDescription.textContent = dataObj.descripcion;
    modalProductCategory.textContent = dataObj.categoria;
    modalProductPrice.textContent = '$ '+dataObj.precio+' MXN';
    modalProductImage.src = 'api/Controllers/imgProducts/'+dataObj.img;
    modalInfoSelectedProductWrap.setAttribute('idProduct', Objectid);

}

// Función que retorna productos relacionados. (Aún no terminada)
function getRelatedProducts() {
    let objs = [];
    for(let i = 0; i < 3; i++) {
        let item = items[Math.floor(Math.random()*items.length)];
        objs = [...objs, item];
    }
    return objs;
}

// Función que limpia el HTML de sección de productos recomendados
function cleanRelatedProducts(){
     // forma rapida (recomendada)
     while(productsWrapper.firstChild) {
        productsWrapper.removeChild(productsWrapper.firstChild);
  }   
}

// Función que cambia el display del modal al darle click
function handleRelatedProdClick(e){
    // exit the modal 
    if ( window.getComputedStyle(itemModal).display == 'flex' ){
        itemModal.style.display = 'none';
    }

    clickOnItemCard(e)
}

// Función que añade event listeners a productos relacionados para dar click
function addEventListenersToRelatedProd(){
    let items = document.querySelectorAll('.product');
    items.forEach(item => { item.addEventListener('click', handleRelatedProdClick) });
}

// Función que muestra los productos relacionados en HTML
function showRelatedProducts(objs) {

    cleanRelatedProducts();

    objs.forEach(item => {
        const element = document.createElement('div');
        element.classList.add("product");
        element.setAttribute('id', item.id)
        element.innerHTML = `
            <img src="api/Controllers/imgProducts/${item.img}" alt="">
            <p class="title">${item.nombre}</p>
            <p class="price">$${item.precio}.00 MXN</p> 
        `;
        productsWrapper.appendChild(element); 
    });

    addEventListenersToRelatedProd()
}
// Función que maneja el click de un producto
function clickOnItemCard(e) {
    changeDataOfModal(e.target.getAttribute("id"));
    let objs = getRelatedProducts();
    showRelatedProducts(objs);
    itemModal.style.display = 'flex';
}

function filtrarEtiqueta(item, opcion){
    const { etiqueta } = item;

    if ( etiqueta ){
        return item.etiqueta === opcion;
    } else { return item}
}

// Función para limpiar los elementos del div general de productos.
function cleanHTML(){
    // forma rapida (recomendada)
    while(itemsWrapper.firstChild) {
        itemsWrapper.removeChild(itemsWrapper.firstChild);
  }
}

// Función que muestra datos filtrados
function showFilteredData(data) {
    cleanHTML();
    mostrarDataEnHtml(data);
}


// Función que filtra elementos en base a una condición 
function filtrarItems(option) {
    let res = items.filter( item => filtrarEtiqueta(item,option));

    showFilteredData(res)
}

// Función que filtra elementos por orden especificado.
function filtrarOrden(item, opcion){
    const { etiqueta } = item;

    if ( etiqueta ){
        return item.etiqueta === opcion;
    } else { return item}
}

// Función que ordena elementos en base a una opción
function ordenarItems(option) {
    let res = items.filter( item => filtrarOrden(item,option));

    showFilteredData(res)
}

// Función que ordena items en base a una categoría
function filtrarCategoria(item, opcion){
    const { categoria } = item;

    if ( categoria ){
        return item.categoria === opcion;
    } else { return item}
}

function filterData(e){
    e.preventDefault();
    if (e.target.classList.contains('txt')){
        filtro = e.target.parentElement.getAttribute('filter');
        let res = items.filter( item => filtrarCategoria(item,filtro));
        showFilteredData(res)
    }

}

// Manejo de event listeners

itemModal.addEventListener('click', exitModal);
filtrarSelect.addEventListener('change' ,(e) => { filtrarItems(e.target.options[e.target.selectedIndex].value) } )
ordenarSelect.addEventListener('change' ,(e) => { ordenarItems(e.target.options[e.target.selectedIndex].value) } )

/* event listeners a link de filtros */

linkDermo.addEventListener('click', filterData);
linkCosme.addEventListener('click', filterData);
linkServ.addEventListener('click', filterData);
linkDeriv.addEventListener('click', filterData);
linkConsul.addEventListener('click', filterData);
linkPromo.addEventListener('click', filterData);
