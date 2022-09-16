<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_plan']))
            {
              $id_plan=$_REQUEST['id_plan'];
            }
            else
            {
            $id_plan=$_POST['id_plan'];
          }


  mysqli_query($con,"delete from planes where id_plan= '$id_plan'")or die(mysqli_error());
  
  echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='planes.php'</script>";
