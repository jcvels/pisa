<?php
  include('../lang/es-ar.php');
  include('../src/pisa_v0.php');
?>

<!-- INICIO REPORTE VENTAS -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><?php echo str_app_name; ?></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo str_lbl_sales; ?></li>
  </ol>
</nav>

<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." id="buscador" onkeyup="tableFilter('buscador', 'searchTarget');"><br>

<section class="container-fluid">
  <table class="table table-hover table-sm" id="searchTarget">
    <?php
      $str = getdatalist('sales');
      $data = json_decode($str, true);
      print('
        <tr>
          <th>Turno</th>
          <th>Estado</th>
          <th>Fecha y hora de apertura</th>
          <th>Fecha y hora de cierre</th>
          <th>Ordenes gestionadas</th>
          <th>Total facturado</th>    
        </tr>
      ');
      foreach($data as $obj)
      {
        print('
          <tr>
            <td><span class="badge badge-info">#'. $obj['id'] .'</span></td>
            <td>'. $obj['state'] .'</td>
            <td>'. $obj['opentimestamp']  .'</td>
            <td>'. $obj['closetimestamp']  .'</td>
            <td>'. $obj['orderQtty']  .'</td>
            <td>$'. $obj['orderTotalAmount']  .'</td>
          </tr>
        ');
      }
    ?>
  </table>
</section>

<!-- FIN REPORTE VENTAS -->
