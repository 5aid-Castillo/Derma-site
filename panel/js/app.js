// Elementos necesarios

let productsWrap = document.querySelector('.products');
let modalWrap = document.querySelector('.modal-wrap');
let formEditar = document.querySelector('.form-editar');
let formNuevo = document.querySelector('.form-nuevo');
let newProductBtn = document.querySelector('.add-product');
let titleModal = document.querySelector('.title-modal');
let deleteBtn = document.querySelector('.orange');
let categoryId = document.querySelector('#categoryId').value;
let changeImageProduct = document.querySelector("#changeImageProduct");
let divClosed = document.querySelector('.closed');
let fileInput = document.querySelector('#fileEdit');

// Inputs del form editar
let formEdit = document.querySelector('.form-editar');

// Inputs del form para agregar producto nuevo
let formNew = document.querySelector('.form-nuevo');

// Funcipon que cambia los datos de HTML desde un obj
function changeData(obj){

    let editName = document.querySelector('.edit-name');
    let editDescription = document.querySelector('.edit-description');
    let editPrice = document.querySelector('.edit-price');
    let editTag = document.querySelector('#edit-tag'); // pendiente
    let editImg = document.querySelector('.edit-img');
    let prodId = document.querySelector('#prodId');


    editName.value = obj.name;
    editDescription.value = obj.description;
    editPrice.value = obj.price;
    editTag.value = obj.tag;
    editImg.src = obj.img;
    prodId.value = obj.idProd;
}

// Función para sacar los datos de un producto seleccionado.
function getDataFromSelectedProduct(item) {

    let name = item.children[2].children[0].children[0].textContent;
    let price = item.children[2].children[0].children[1].textContent;
    price = price.slice(1);
    let description = item.getAttribute('data');
    let tag = item.children[0].children[1].textContent;
    let img = item.children[1].children[0].src;
    let categoryId = document.querySelector('#categoryId').value;
    let prodId = item.getAttribute('id');

    let obj = {
        name: name,
        price: price,
        description: description,
        tag: tag,
        img: img,
        idProd: prodId
    };

    changeData(obj);


}

// Función para editar un producto
function editProduct(e){
    if (e.target.classList.contains('edit')) {
        modalWrap.style.display = 'flex';
        formEditar.style.display = 'flex';

        // Aquí mandamos todo el elemento a función
        getDataFromSelectedProduct(e.target.parentElement.parentElement.parentElement);

    } else if (e.target.classList.contains('delete')) {
        deleteProduct(e.target.parentElement.parentElement.parentElement.getAttribute('id'));
    }
}

// Función que muestra el modal para un nuevo producto
function newProduct(e){
        modalWrap.style.display = 'flex';
        formNuevo.style.display = 'flex';
        titleModal.textContent = 'Nuevo producto';
}

// Función para salir de un modal.
function exitModal(e){
    if (e.target.classList.contains('modal-wrap') && modalWrap.style.display == 'flex' ){
        modalWrap.style.display = 'none';
        formEditar.style.display = 'none';
        formNuevo.style.display = 'none';
    }

}

// Función que borra del html un elemento dado un id
function deleteItemFromHTML(id){

    for (let i = 0; i < productsWrap.children.length; i++) {
        if (productsWrap.children[i].getAttribute('id') == id) {
            productsWrap.children[i].remove();
        }
    }
}

// Función que borra un elemento tanto de la bd como del DOM
function deleteProduct(id) {
    var doc;
    var result = confirm("¿Seguro que quieres eliminar este item?");
    if (result == true) {
        let formData = new FormData(); 
        formData.append("id", id);
        formData.append("action","delItem")
        deleteItemFromDB(formData); // agregar validación de si efectivamente se borro
        deleteItemFromHTML(id);
    }

}

// Función para cerrar el modal
function closeModal(){
    modalWrap.style.display = 'none';
    formEditar.style.display = 'none';
    formNuevo.style.display = 'none';   
}


// Función para obtener información de un form
function getDataFromNewForm(e){
    e.preventDefault();

    let newName = document.querySelector('.nuevo-name').value;
    let newDescription = document.querySelector('.nuevo-description').value;
    let newPrice = document.querySelector('.nuevo-price').value;
    let newTag = document.querySelector('#nuevo-tag');
    newTag = newTag.options[newTag.selectedIndex].value;
    let fileInput = document.querySelector('#fileNew');
    let categoryId = document.querySelector('#categoryId').value;

    let formData = new FormData(); 

    const selectedFile = fileInput.files[0];
    formData.append("file", selectedFile);
    formData.append("name", newName);
    formData.append("description", newDescription);
    formData.append("price", newPrice);
    formData.append("tag", newTag);
    formData.append("category", categoryId);
    formData.append("action", "newProd");

    appearAnimation('Cargando....')
    let res = insertNewProduct(formData);
    console.log(res)
    if (res == 1){
        setTimeout(()=> {
            dismissAnimation()
            location.reload() 
        },3000)

    }
    // reload the page to see the changes
}

// Función que muestra un loading 
function appearAnimation(msg){
    let loadingWrapper = document.querySelector('.wrapper-loading');
    let p = document.querySelector('.p-message');
    loadingWrapper.style.opacity = "1";
    loadingWrapper.style.zIndex = "999"
    p.textContent = msg;
}

// Función que oculta el loader

function dismissAnimation(){
        let loadingWrapper = document.querySelector('.wrapper-loading');
        loadingWrapper.style.opacity = "0";
        loadingWrapper.style.zIndex = "-10"
}

// Función para actualizar un elemento
function updateItem(e){
    e.preventDefault();

    let editName = document.querySelector('.edit-name').value;
    let editDescription = document.querySelector('.edit-description').value;
    let editPrice = document.querySelector('.edit-price').value;
    let editTag = document.querySelector('#edit-tag'); // pendiente
    editTag = editTag.options[editTag.selectedIndex].value;
    let prodId = document.querySelector('#prodId').value;
    let fileInput = document.querySelector('#fileEdit');

    let formData = new FormData(); 

    const selectedFile = fileInput.files[0];
    formData.append("file", selectedFile);
    formData.append("name", editName);
    formData.append("description", editDescription);
    formData.append("price", editPrice);
    formData.append("tag", editTag);
    formData.append("category", categoryId);
    formData.append("action", "updateProd");
    formData.append("idProd",prodId);

    formData.values();
    updateItemOnBD(formData);
}

// Función para mostrar una imagen en el DOM
function showInputImage(e){
    e.target.parentElement.style.display = 'none'; // put display none to div
    divClosed.style.display = "flex";
}

// Función para cambiar el estado del input.
function changeStateInput(e){
   e.target.setAttribute("change",1);
}

// Añadimos Event listeners 

productsWrap.addEventListener('click', editProduct);
modalWrap.addEventListener('click', exitModal);
newProductBtn.addEventListener('click', newProduct);
formNew.addEventListener('submit', getDataFromNewForm);
formEdit.addEventListener('submit', updateItem);
changeImageProduct.addEventListener("click", showInputImage);
fileInput.addEventListener('change', changeStateInput);