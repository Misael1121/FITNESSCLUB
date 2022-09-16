<?php include 'header.php';

//$branch_id = $_GET['id'];
?>

<!-- Font Awesome -->
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../plugins/select2/select2.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include 'main_sidebar.php'; ?>

      <!-- top navigation -->
      <?php include 'top_nav.php'; ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x-panel">

            </div>

          </div>
          <!--end of modal-dialog-->
        </div>
        <center>
        <div class="container">
              <div class="col-md-3">
             
                </div>
              <div class="col-md-3">
                <form method="post" action="reportes_por_mes_diario.php" enctype="multipart/form-data" class="form-horizontal">

              <div class="col-md-12 btn-print">
                <div class="form-group">
                  <label for="date" class="col-sm-3 control-label"> SELCCIONE MES </label>
                  <div class="input-group col-sm-8">

                    <select name="mes" class="form-control select2" autofocus required>
                      <option value="1">Enero</option>
                      <option value="2">Febrero</option>
                      <option value="3">Marso</option>
                      <option value="4">Abril</option>
                      <option value="5">Mayo</option>
                      <option value="6">Junio</option>
                      <option value="7">Julio</option>
                      <option value="8">Agosto</option>
                      <option value="9">Setiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
                    </select>

                  </div><!-- /.input group -->
                    <br>
                   <button class="btn btn-lg btn-danger btn-print" id="daterange-btn" name="buscar_fechas">BUSCAR POR MES</button>
                </div><!-- /.form group -->
              </div>



              <div class="col-md-12">
                <div class="col-md-12">


                </div>

              </div>

            </form>
                </div>
              <div class="col-md-3">
               
                </div>
              </div>

</center>
        <!--end of modal-->

        <div class="box-body">
          <!-- Date range -->
          <section class="content-header">

          </section>

          <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>


          <div class="box-header">
            <h3 class="box-title"><b> Lista Datos </b></h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nombre cliente</th>
                  <th>DPI</th>
                  <th>Fecha </th>
                  <th class="btn-print"> Accion </th>

                </tr>
              </thead>
              <tbody>





                <?php





                if (isset($_POST['buscar_fechas'])) {
                  $mes = $_POST['mes'];

                ?>

                  <?php

                  $query = mysqli_query($con, "select * from  venta_diaria AS z INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente  where  MONTH(fecha)='$mes'  ") or die(mysqli_error());
                  $contador = 0;
                  while ($row = mysqli_fetch_array($query)) {
                    $contador++;
                  }

                  ?>

                  <div class="row">
                    <div class="col-md-4 col-lg-12 hide-section">
                      <a class="btn btn-danger btn-print" disabled="true" style="height:25%; width:50%; font-size: 25px " role="button">Total Ventas Diarias= <label style='color:black;  font-size: 25px '>=<?php echo $contador; ?></label></a>



                    </div>


                  </div>

                  <?php






                  $query = mysqli_query($con, "select * from  venta_diaria AS z INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente  where  MONTH(fecha)='$mes' ") or die(mysqli_error());
                  $i = 1;
                  while ($row = mysqli_fetch_array($query)) {
                    $codigo = $row['codigo'];

                  ?>

                    <tr>
                      <td><?php echo $row['nombre']; ?></td>
                      <td><?php echo $row['dpi']; ?></td>
                      <td><?php echo $row['fecha']; ?></td>
                      <td>
                        <?php


                        ?>
                        <a class="btn btn-danger btn-print" href="<?php echo "generar_ticket_diario.php?codigo=$codigo"; ?>" role="button">Ver Comprobante</a>


                        <?php
                        //          }
                        ?>

                      </td>
                    </tr>

                <?php
                  }
                }
                ?>


                <!--end of modal-->

              </tbody>


              <!-- /footer content -->
          </div>
        </div>

        <?php include 'datatable_script.php'; ?>



        <script>
          $(document).ready(function() {
            $('#example2').dataTable({
                "language": {
                  "paginate": {
                    "previous": "Anterior",
                    "next": "Posterior"
                  },
                  "search": "Buscar:",


                },
                "lengthMenu": [
                  [10, 25, 50, -1],
                  [10, 25, 50, "All"]
                ],


                "searching": true,
              }

            );
          });
        </script>
</body>

</html>