<?php
$id = $_SESSION['id'];
?>

<?php

?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3><?php echo $empresa; ?></h3>
    <ul class="nav side-menu">
      <li><a href="inicio.php"><i class="fa fa-dashboard"></i> Inicio <span class="fa fa-chevron-right"></span></a></li>

      <li><a href="planes.php"><i class="fa fa-database"></i> Planes <span class="fa fa-chevron-right"></span></a></li>

      <li><a href="caja.php"><i class="fa fa-bank"></i> Caja <span class="fa fa-chevron-right"></span></a></li>
      <?php
      if ($tipo == "administrador") {

      ?>
        <li><a><i class="fa fa-group"></i> Usuarios<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">

            <li><a href="usuario.php">Usuarios</a></li>

            <li><a href="usuario_agregar.php">Agregar</a></li>

          </ul>
        </li>
        <li><a><i class="fa fa-user-md"></i> Cliente<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">

            <li><a href="cliente.php">Mostrar</a></li>
            <li><a href="cliente_agregar.php">Agregar</a></li>


          </ul>
        </li>

      <?php
      }
      ?>

      <?php
      if ($tipo == "administrador" or $tipo == "empleado") {

      ?>
        <li><a><i class="fa fa-database"></i> Productos<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">

            <li><a href="productos.php">Producto</a></li>



          </ul>
        </li>

      <?php
      }
      ?>



      <?php
      if ($tipo == "administrador" or $tipo == "empleado") {

      ?>




        <li><a href="ventas_planes_lista.php"><i class="fa fa-retweet"></i>Registro De Asistencia<span class="fa fa-chevron-right"></span></li></a>


      <?php
      }
      if ($tipo == "administrador") {

      ?>

        <li><a href="ganancias_anio.php"><i class="fa fa-line-chart"></i>Ganancios Del Año<span class="fa fa-chevron-right"></span></li></a>



      <?php
      }
      if ($tipo == "administrador" or $tipo == "empleado") {

      ?>

        <li><a><i class="fa fa-money"></i> Realizar Venta<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">

            <li><a href="ventas.php">Ventas Productos</a></li>
            <li><a href="plan_cliente.php">Venta Planes</a></li>
            <li><a href="venta_diaria.php">Venta Diaria</a></li>

          </ul>
        </li>

      <?php
      }
      ?>


      <?php
      if ($tipo == "administrador" or $tipo == "empleado") {

      ?>
        <li><a><i class="fa fa-bar-chart"></i> Ventas Realizadas<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">

            <li><a href="ventas_planes_totales.php">Planes</a></li>
            <li><a href="ventas_diario_totales.php">Por Dia</a></li>
            <li><a href="ventas_productos_totales.php">Productos</a></li>

          </ul>
        </li>
      <?php
      }

      if ($tipo == "administrador") {
      ?>

        <li><a><i class="fa fa-bar-chart"></i> Reportes Ventas Planes<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">

            <li><a href="reportes_por_fecha_planes.php">Entre Fechas</a></li>
            <li><a href="reportes_por_dia_planes.php">Por Dia</a></li>
            <li><a href="reportes_por_mes_planes.php">Por Mes</a></li>
            <li><a href="reportes_ultimos_7dias_planes.php">Ultimos 7 Dias</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-bar-chart"></i> Reportes Ventas Diario<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">

            <li><a href="reportes_por_fecha_diario.php">Entre Fechas</a></li>
            <li><a href="reportes_por_dia_diario.php">Por Dia</a></li>
            <li><a href="reportes_por_mes_diario.php">Por Mes</a></li>
            <li><a href="reportes_ultimos_7dias_diario.php">Ultimos 7 Dias</a></li>
          </ul>
        </li>


        <li><a><i class="fa fa-bar-chart"></i> Reportes Ventas Productos<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">

            <li><a href="reportes_por_fecha.php">Entre Fechas</a></li>
            <li><a href="reportes_por_dia.php">Por Dia</a></li>
            <li><a href="reportes_por_mes.php">Por Mes</a></li>
            <li><a href="reportes_ultimos_7dias.php">Ultimos 7 Dias</a></li>
          </ul>
        </li>
      <?php
      }
      ?>


      <li><a><i class="fa fa-gear"></i>Configuracion<span class="fa fa-chevron-s"></span></a>
        <ul class="nav child_menu">


          <li><a href="editar_usuario_password.php">Cambiar Contraseña</a></li>
          <?php
          if ($tipo == "administrador") {

          ?>
            <li><a href="configuracion.php">Configuracion</a></li>
          <?php
          }
          ?>

        </ul>
      </li>

  </div>


</div>