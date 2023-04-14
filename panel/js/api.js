// Función que inserta un producto a la BD
function insertNewProduct(obj){
    let res = 0;
   try {
    const resp = axios.post('http://localhost/f/TiendaEnLineaDermatologa/api/', obj)
    return res+1;
   } catch(err) {
    // Handle Error Here
    return res;
   }
}

// Función que elimina un producto de la BD
function deleteItemFromDB(obj) {
    axios.post('http://localhost/f/TiendaEnLineaDermatologa/api/', obj)
    .then(response => location.reload()  )
    .catch(error => {
        console.error('There was an error!', error);
    });
}   

// Función que actualiza un producto en la BD
function updateItemOnBD(obj) {
    axios.post('http://localhost/f/TiendaEnLineaDermatologa/api/', obj)
    .then(response => location.reload() )
    .catch(error => {
        console.error('There was an error!', error);
    });
}   