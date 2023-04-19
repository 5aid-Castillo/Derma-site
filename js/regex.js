const namex = document.getElementById("name");
const email = document.getElementById("email");
const pass = document.getElementById("pass");
const form = document.getElementById("form-signup");
const warnx = document.getElementById("warnings");

form.addEventListener("submit", e =>{
    e.preventDefault()
    let warnings = "";
    let getin = false;
    
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    warnx.innerHTML = ""
    
    if(namex.value.length < 3){
        warnings += `El nombre no es valido <br>`
        getin = true
    }
    if(!regexEmail.test(email.value)){
        warnings += `El email no es valido <br>`
        getin = true
    }
    /* if(pass.value.length < 6){
        warnings += `La contraseña no es valida<br>`
        getin = true
    }  */
    if(getin){
        warnx.innerHTML = warnings
    }else{
      const datos = new FormData(form);
      fetch('../helpers/sign_up.php',{
        method:'POST',
        body:datos
      })
      .then(res => res.json())
      .then(data => {
        console.log(data);
      })
      /*   warnx.innerHTML = "Registrado" */
    }
})