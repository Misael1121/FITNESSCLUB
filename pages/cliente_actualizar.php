 <?php
	session_start();
	include('../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_cliente = $_POST['id_cliente'];
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$dpi = $_POST['dpi'];
	$telefono = $_POST['telefono'];





	///finzalizo encriptacion


	mysqli_query($con, "update clientes set nombre='$nombre',edad='$edad',telefono='$telefono',dpi='$dpi'  where id_cliente='$id_cliente'") or die(mysqli_error());



	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='cliente.php?id_cliente=$id_cliente'</script>";














	?>
