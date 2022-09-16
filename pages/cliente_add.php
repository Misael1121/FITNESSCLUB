<?php
session_start();
include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$telefono = $_POST['telefono'];
	$dpi = $_POST['dpi'];


		$total = 0;

		
	
	$query2=mysqli_query($con,"select * from clientes where dpi='$dpi'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('DPI ya existe!');</script>";
			echo "<script>document.location='cliente.php'</script>";
		}
		else
		{




			mysqli_query($con,"INSERT INTO clientes(nombre,edad,telefono,dpi)
				VALUES('$nombre','$edad','$telefono','$dpi')")or die(mysqli_error($con));

			
			echo "<script>document.location='cliente.php'</script>";


	
	




   



}
