<?php
session_start();
include('../dist/includes/dbcon.php');
$monto = $_POST['monto'];



$fecha_apertura = date('Y-m-d');

mysqli_query($con, "INSERT INTO caja(estado,monto,fecha_apertura,fecha_cierre)
				VALUES('Abierto','$monto','$fecha_apertura','')") or die(mysqli_error($con));
echo "<script>document.location='caja.php'</script>";
