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
      <style>
        label {

          color: black;
        }

        li {
          color: white;
        }

        ul {
          color: white;
        }

        #buscar {
          text-align: right;
        }
      </style>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x-panel">

            </div>

          </div>
          <!--end of modal-dialog-->
        </div>


        <div class="panel-heading">


        </div>

        <!--end of modal-->


        <div class="box-header">
          <h3 class="box-title"> </h3>

        </div><!-- /.box-header -->






        <a class="btn btn-success btn-print" href="<?php echo "venta_diaria_add.php"; ?>" role="button">GENERAR Ticket</a>







        <div class="box-body">
















          <!--end of modal-->





          <?php
          $query31 = mysqli_query($con, "select * from empresa ") or die(mysqli_error());

          while ($row31 = mysqli_fetch_array($query31)) {
            $por_dia = $row31['por_dia'];
          }

          $query6 = mysqli_query($con, "select * from temporal_ventas_dia  where id_temporal='1' ") or die(mysqli_error());

          while ($row6 = mysqli_fetch_array($query6)) {

            $cliente = $row6['cliente'];
          }



          $precio = '';
          $nombre = '';
          $dpi = '';


          $query3 = mysqli_query($con, "select * from clientes where id_cliente='$cliente' ") or die(mysqli_error());

          while ($row3 = mysqli_fetch_array($query3)) {
            $nombre = $row3['nombre'];
            $dni = $row3['dpi'];
          }

          ?>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>


                <th>Nombre cliente</th>
                <th>DPI</th>
                <th>Precio</th>


              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $nombre; ?></td>

                <td><?php echo $dpi; ?></td>
                <td><?php echo $por_dia; ?></td>

              </tr>
            </tbody>

          </table>

          <?php



          ?>






          <div class="box-body">

            <div class="row">
              <div class="col-md-12 btn-print">

                <a class="btn btn-warning btn-print" href="cliente_agregar.php" role="button">REGISTRAR CLIENTE</a>
                <div class="box-header">
                  <h3 class="box-title">SELECCIONE CLIENTE</h3>
                </div><!-- /.box-header -->
                <form>
                  Busqueda: <input id="txtBusqueda_camion" type="text" onkeyup="Buscar_camion();" />

                </form>
                <table id="example_cliente" class="table table-bordered table-striped">
                  <thead>
                    <tr>

                      <th>#</th>
                      <th>Nombre</th>
                      <th>Edad</th>
                      <th>DPI</th>


                      <th class="btn-print"> Accion </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // $branch=$_SESSION['branch'];
                    $query = mysqli_query($con, "select * from clientes ") or die(mysqli_error());
                    $i = 0;
                    while ($row = mysqli_fetch_array($query)) {
                      $id_cliente = $row['id_cliente'];
                      $i++;
                    ?>
                      <tr>

                        <td><?php echo $i; ?></td>

                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['edad']; ?></td>

                        <td><?php echo $row['dpi']; ?></td>


                        <td>
                          <?php


                          ?>

                          <a class="btn btn-danger btn-print" href="<?php echo "temporal_add_cliente_diario.php?id_cliente=$id_cliente"; ?>" role="button">SELECCIONAR</a>
                          <?php
                          //          }
                          ?>

                        </td>
                      </tr>

                      <!--end of modal-->

                    <?php } ?>
                  </tbody>

                </table>
                <script type="text/javascript">
                  // < ![CDATA[
                  function Eliminar(i) {
                    document.getElementsByTagName("table")[0].setAttribute("id", "tableid");
                    document.getElementById("tableid").deleteRow(i);
                  }

                  function Buscar_camion() {
                    var tabla = document.getElementById('example_cliente');
                    var busqueda = document.getElementById('txtBusqueda_camion').value.toLowerCase();
                    var cellsOfRow = "";
                    var found = false;
                    var compareWith = "";
                    for (var i = 1; i < tabla.rows.length; i++) {
                      cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                      found = false;
                      for (var j = 0; j < cellsOfRow.length && !found; j++) {
                        compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                        if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1)) {
                          found = true;
                        }
                      }
                      if (found) {
                        tabla.rows[i].style.display = '';
                      } else {
                        tabla.rows[i].style.display = 'none';
                      }
                    }
                  }
                  // ]]>
                </script>

              </div>



            </div>


          </div><!-- /.box-body -->





        </div><!-- /.col -->


      </div><!-- /.row -->




    </div><!-- /.box-body -->

  </div>
  </div>
  </div>
  </div>
  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      APSYSTEM <a href="#"></a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>

  <?php include 'datatable_script.php'; ?>



  <script>
    $(document).ready(function() {
      $('#example2').dataTable({
          "language": {
            "paginate": {
              "previous": "anterior",
              "next": "posterior"
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




  <!-- /gauge.js -->
</body>

</html>