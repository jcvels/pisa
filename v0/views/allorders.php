<?php
  include('../lang/es-ar.php');
  include('../src/pisa_v0.php');
?>

<!-- INICIO DASHBOARD -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><?php echo str_app_name; ?></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo str_lbl_orders; ?></li>
  </ol>
</nav>

<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." id="buscador" onkeyup="tableFilter('buscador','searchTarget');"><br>

<section class="container-fluid">
  <table class="table table-hover table-sm" id="searchTarget">
    <?php
      $str = getdatalist('allorder');
      $data = json_decode($str, true);
      print('
      <tr>
        <th>ID</th>
        <th>Estado</th>
        <th>Pedido</th>
        <th>Total</th>
        <th>Cliente / Dirección de entrega</th>
        <th>Teléfono</th>
        <th>Turno</th>  
      </tr>
    ');
      foreach($data as $obj)
      {
        print('
          <tr>
            <td>#'. $obj['id'] .'</td>
            <td>'. stateID2stateStr($obj['stateid']) .'</td>
            <td>'. $obj['customerOrder']  .'</td>
            <td>$'. $obj['totalOrder'] .'</td>
            <td><p>'. $obj['customerName']  .' ('. $obj['customerAddress']  .' )</td>
            <td>'. $obj['customerPhone']  .'</td>
            <td>@'. $obj['orderShift']  .'</td>
          </tr>
        ');
      }
    ?>
  </table>
</section>

<!-- FIN DASHBOARD -->
