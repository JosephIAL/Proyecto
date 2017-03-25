<?php
include "layout.php";
include "bd.php";
?>
	<?php
if(isset($_SESSION['user'])){
	header('Location:index.php');
	
}

if(isset($_POST['acceder'])){
			$valor = false;
$consulta ="select * from usuarios";
$res = mysqli_query($coneccion,$consulta);	
while($tabla = mysqli_fetch_assoc($res)){
if($_POST['usuario']==$tabla['usuario'] and $_POST['clave']==$tabla['clave']){
$_SESSION['user'] = $tabla['nombre'];
$valor=true;
}	
}	

mysqli_free_result($res);
if($valor==true){	header('Location: index.php');}
}
		?>	
<div style='text-align:center; background-color:white; height:300px;' >
<form action='' method='post'>
<h3>Usuario</h3>
<input type='text' name='usuario'/></br>
<h3>Clave</h3>
<input type='password' name='clave'></br>
<button type='submit' class='boton' name='acceder'>Ingresar</button>
</form>

</div>		
		
