<?php
  include('../lang/es-ar.php');
  include('../src/pisa_v0.php');
?>

<!-- INICIO CLIENTES -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><?php echo str_app_name; ?></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo str_lbl_customers; ?></li>
  </ol>
</nav>

<div class="form-row">
  <div class="form-group col-9">
    <input class="form-control" type="search" placeholder="Buscar..." id="buscador" onkeyup="tableFilter('buscador','searchTarget');">
  </div>
  <div class="form-group col-3">
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#customerModal"><?php echo str_btn_add; ?></button>
  </div>
</div>

<div>
  <table class="table table-hover" id="searchTarget">
    <tbody>
      <?php
        $str = getdatalist('customer');
        $data = json_decode($str, true);
        foreach($data as $obj)
        {
          print('
            <tr>
            <td>#'. $obj['id'] .'</td>
            <td>'. $obj['name'] .'</td>
            <td>'. $obj['address'] .' [ '. $obj['nearStreetA'] .' | '. $obj['nearStreetB'] .' ]</td>
            <td><a href="tel:'. $obj['phone'] .'">'. $obj['phone'] .'</a></td>   
            <td>
            <div class="btn-group   float-right" role="group">
            <button type="button" class="btn btn-outline-primary btn-sm" onclick="delCustomer(\''. $obj['id'] .'\');">'.str_btn_delete.'</button>
            <button type="button" class="btn btn-outline-primary btn-sm" onclick="showCustomerForm(\''. $obj['id'] .'\',\''. $obj['name'] .'\',\''. $obj['address'] .'\',\''. $obj['nearStreetA'] .'\',\''. $obj['nearStreetB'] .'\',\''. $obj['phone'] .'\');">'.str_btn_edit.'</button>
            </div>
            </td></tr>
          ');
        }
      ?>
    </tbody>
  </table>
</div>

<!-- FIN CLIENTES -->
