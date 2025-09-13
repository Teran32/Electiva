		
		const username = document.getElementById('username');  
			const cont = document.getElementById('password');
document.getElementById('inicio_sesion').addEventListener('click', function() { 
	const usernameImput = username.value.trim();
	const passwordImput = cont.value.trim();
			if (usernameImput ==="" || passwordImput ==="") {  
				alert ('Por favor, ingrese un nombre de usuario y una contraseña.');  
			} else {  
				window.location.href = "foodRun.html";
			}  
		});		

// Xfinnnnnnnnnnnn codigo para cambiar el tipo de input de password a text (para ocultar la contraseña) y aclarar y colocar borros el icono del ojo
		const vista = document.querySelector('.icon');
		vista.addEventListener('click',() => {
			if (cont.type === 'password'){
				cont.type ='text';
				vista.style.opacity = "1";
			}
			else{
				cont.type ='password';
				vista.style.opacity = "0.5";
			}
		})