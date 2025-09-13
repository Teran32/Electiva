
const form = document.getElementById('form');

const nombre = document.querySelector('.text')
const password1 = document.querySelector('.cont'), 
password2 = document.querySelector('.confiCont');

form.addEventListener('submit', (e) => {
    if(password1.value ==="" || password2.value ==="" ||  nombre.value ==="" ){
        e.preventDefault();
            alert("Xfavor debe llenar todas las casillas")

        }
        else if (password1.value !== password2.value){
        e.preventDefault();
        alert("Xfavor la contraseña debe ser identica en las dos casillas");

    }
    else {
        alert("Formulario enviado.... Regresando al Login")
        window.location.href = "logi.php#";
    }
});


