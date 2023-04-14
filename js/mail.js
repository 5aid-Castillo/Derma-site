
let form = document.querySelector('#sendMessage');


// Función que cambia la opacidad del modal de éxito cuando se muestra.
function showSuccessModal() {
    let div = document.querySelector('.greenModal');
    div.style.opacity = '1';
    setTimeout(() => {
        div.style.opacity = '0';
      }, 4000); 
      
}

// Función que obtiene los datos del formulario HTML y realiza una petición POST a API.
function getDataForm(e){
    e.preventDefault()

    // Obtenemos los datos del form
    let name = form.elements['name'].value;
    let email = form.elements['email'].value;
    let message = form.elements['message'].value;

    let obj = {name, email, message}

    // Enviamos una petición POST
    axios.post('./mail/index.php', obj)
      .then(function (response) {
        // Si la respuesta es 1, significa que todo salió correcto.
        if (response.data == "1" ){
            showSuccessModal(); // Mostramos un modal de éxito.
        }
      })
      .catch(function (error) {
        console.log(error); // Mostramos el error en consola.
      });

}

// Añadimos un event listener de submit al form.
form.addEventListener('submit', getDataForm );
