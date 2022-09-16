<?php include('dbcon.php');
session_start();
date_default_timezone_set("America/Mexico_City");
setlocale(LC_ALL, "ES");
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
    <script>
        window.location = "index.php";
    </script>
<?php
}
$session_id = $_SESSION['id'];

$user_query = mysqli_query($con, "select * from usuario where id = '$session_id'") or die(mysql_error());
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['usuario'];
$nombre = $user_row['usuario'];

$imagen = $user_row['imagen'];
$tipo = $user_row['tipo'];




$empresa_query = mysqli_query($con, "select * from empresa where id_empresa = '1'") or die(mysql_error());
$empresa_row = mysqli_fetch_array($empresa_query);
$imagen_empresa = $empresa_row['imagen'];
$empresa = $empresa_row['empresa'];
$simbolo_moneda = $empresa_row['simbolo_moneda'];
$moneda = $empresa_row['moneda'];
$id = $_SESSION['id'];


?>