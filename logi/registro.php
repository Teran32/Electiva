
<?php
//Conexion con no se quien, xampp creo o con la database de xampp
$server = "localhost";
$user = "root";
$pass = "";
$db = "registro";

$conexion = new mysqli ($server, $user, $pass, $db);


//condicional que si existe algun error devolvera conexion fallida
if ($conexion -> connect_errno){
    die ("conexion Fallida". $conexion->connect_errno);
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
	<link rel="stylesheet" href="registro.css">
	
	

</head>
<body>
	<main>
		<div>

			<img source src="5087607.png">
			<h2> Registro de datos </h2>
			<form action="#" name="registro" method="post" id="form">
				<h4>Ingrese su nombre de Usuario</h4>
					<input class="text" id="id_text" type="text" name="name" placeholder=" Nombre de Usuario">

				<h4>Ingrese su contraseña</h4>
					<input class="cont" id="id_password" type="password" name="password" placeholder=" Contraseña">

				<h4>Ingrese su contraseña nuevamente</h4>
					<input class="confiCont" id="id_confi_password" type="password" placeholder=" Contraseña">

				<h4>Ingrese su fecha de nacimiento</h4>
					<input class="input3" id="input3" type="datetime-local" placeholder=" Contraseña">
					
				<button id= "registrar" name="click"> Registrar</button>
			</form>
		<div class="registroIco">
				<a href="https://www.facebook.com/"><img class="dos",source src="2.png"></a>
				<a href="https://www.instagram.com/"><img class="tres", source src="3.png"></a>
				<a href="https://www.google.com/"><img class="uno" source src="1.jpg"></a>
		</div>
		</div>

	</main>
</body>
</html>

<script src="registro.js"></script>
// ya ni se que coloqu[e]



<?php
if (isset($_POST['click'])){
	$name  = $_POST ['name'];
	$passwordd = $_POST ['password'];

	$insertaDatos = "INSERT INTO data_logging VALUES('','$name','$passwordd')";
	$EjecutarInsertar = mysqli_query ($conexion, $insertaDatos);
}

?>
