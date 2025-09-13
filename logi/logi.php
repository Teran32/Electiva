<?php
//Conexion con no se quien, xampp creo o con la database de xampp
$server = "localhost";
$user = "root";
$pass = "";
$db = "registro";

$conexion = new mysqli ($server, $user, $pass, $db);


//condicional que si existe algun error devolvera conexion fallida
if ($conexion -> connect_errno){
    die("conexion Fallida". $conexion->connect_errno);
}else{
    echo "conectado";
}
?> 



<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Login </title>
	<link rel="stylesheet" href="	login.css">
	
	

</head>
<body>
	<main>
		<div>
			<img source src="5087607.png">
			<h2>Inicio de sesión</h2>
			<h4>UserName</h4>
			<input class="input1" type="text" placeholder=" Nombre de usuario" id="username">
			<h4>Password</h4>
			
				<input class="input" type="password" placeholder=" Contraseña" id="password">
				<img src="vista.png" class="icon" alt="Aca no existe nada" id="icon">

			<label class="pru">
				<input type="checkbox" id="remember"> Recordar
			</label>

			<p>¿Estas registrado? <a href="http://localhost/logi/registro.php#"> Registrarse </a></p>


			<a href="https://www.facebook.com/"><img class="dos",source src="2.png"></a>
			<a href="https://www.instagram.com/"><img class="tres", source src="3.png"></a>
			<a href="https://www.google.com/"><img class="uno" source src="1.jpg"></a>


			<button id= "inicio_sesion" >Iniciar sesión</button>
			

		
		</div>
	</main>
	<script src= "login.js"></script>
</body>
</html>