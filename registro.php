<?php
include "layout.php";
include "bd.php";
?>	
<?php
if(isset($_SESSION['user'])){
	header('Location:index.php');
	
}

if(isset($_POST['acceder_r'])){
$consulta ="insert into usuarios(nombre,usuario,clave) VALUES('".$_POST['nombre_r']."','".$_POST['usuario_r']."','".$_POST['clave_r']."')";
if(mysqli_query($coneccion,$consulta)){
	$_SESSION['user'] = $_POST['nombre_r'];
	header('Location:index.php');
}else{
	echo 'Algo salio mal';
}	
	
}

?>
<div class='contenedor ' >	
<form action='' method='post' >
<h3>Nombre</h3>
<input type='text' name='nombre_r'/>
<h3>Usuario</h3>
<input type='text' name='usuario_r'/>
<h3>Clave</h3>
<input type='password' name='clave_r'></br>
<button type='submit' class='boton' name='acceder_r'>Registrarse</button>
</form>


	
</div>		


