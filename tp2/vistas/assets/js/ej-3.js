document.querySelector("#password").addEventListener("input", validarPassword);

function validarPassword(){
    let rta = true;
    let errorMessage = ""
    if (document.querySelector("#password").value.length < 8){
        errorMessage += "La contraseña debe contener al menos 8 caracteres. ";
        rta = false;
    }
    if (document.querySelector("#password").value === document.querySelector("#usuario").value) {
        errorMessage += "La contraseña no puede ser igual al nombre de usuario.";
        rta = false;
    }
    document.querySelector("#password-error").textContent = errorMessage;
    return rta;
}

document.querySelector("#login-form").addEventListener("submit", event => {
    event.preventDefault();
    if (validarPassword()){
        document.querySelector("#login-form").submit();
    }
})