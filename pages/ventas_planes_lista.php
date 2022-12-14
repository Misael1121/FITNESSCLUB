<?php include 'header.php';
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


        <!--end of modal-->

        <div class="box-body">
          <!-- Date range -->
          <section class="content-header">

          </section>

          <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>


          <div class="box-header">
            <h3 class="box-title"> <b> LISTA PLANES </b> </h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre Cliente</th>
                  <th>DPI</th>
                  <th>Tipo Plan </th>
                  <th>Numero De Dias </th>
                  <th class="btn-print"> Accion </th>
                </tr>
              </thead>
              <tbody>

                <?php
                $fechaActual = date('Y-m-d');

                ?>
                <?php

                $query = mysqli_query($con, "select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente   ") or die(mysqli_error());
                $contador = 0;
                while ($row = mysqli_fetch_array($query)) {
                  $contador++;
                }

                ?>
                <div class="row">
                  <div class="col-md-4 col-lg-12 hide-section">
                    <a class="btn btn-danger btn-print" disabled="true" style="color:black; height:25%; width:50%; font-size: 25px " role="button">Total Planes = <label style='color:white;  font-size: 25px '><?php echo $contador; ?></label></a>

                  </div>


                </div>

                <?php

                $query = mysqli_query($con, "select * from planes AS p INNER JOIN plan_cliente AS z
      ON p.id_plan = z.id_plan INNER JOIN clientes AS c
      ON c.id_cliente = z.id_cliente  ") or die(mysqli_error());
                $i = 1;
                while ($row = mysqli_fetch_array($query)) {
                  $codigo = $row['codigo'];
                  $id_plan_cliente = $row['id_plan_cliente'];
                ?>

                  <tr>
                    <td><?php echo $row['codigo']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['dpi']; ?></td>
                    <td><?php echo $row['tipo_tiempo']; ?></td>
                    <td><?php echo $row['numero_tiempo']; ?></td>
                    <td>
                      <?php

                      ?>
                      <a class="btn btn-danger btn-print" href="<?php echo "asistencia_plan_agregar.php?id_plan_cliente=$id_plan_cliente"; ?>" role="button">Ver Asistencia</a>

                      <?php
                      ?>

                    </td>
                  </tr>

                <?php
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