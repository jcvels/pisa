<?php

include('../lang/es-ar.php');
include('../src/pisa_v0.php');

$sales = 0;
$customers = 0;

$cancel = 0;
$finished =0;
$delivery = 0;
$deliveryWaiting = 0;
$cooking = 0;
$cookingWaiting = 0;
$new = 0;

$total = 0;

$str = getdatalist('thisshiftorders');
$data = json_decode($str, true);

foreach($data as $obj)
{
  switch ( $obj['stateid'] )
  {
    case '10': $new++; break;
    case '20': $cookingWaiting++; break;
    case '30': $cooking++; break;
    case '40': $deliveryWaiting++; break;
    case '50': $delivery++; break;
    case '60': $finished; $sales += $obj['totalOrder']; break;
    case '70': $cancel++; break;
    default: 
  }
  $total++;
}

$str = getdatalist('customer');
$data = json_decode($str, true);

foreach($data as $obj)
{
  $customers++;
}


print
  ('

  <div class="d-flex">
    <div class="col-sm-2"> 
      <div class="card">
        <div class="card-header">Ventas</div>
        <div class="card-body"><h4 class="card-title">$'.$sales.'</h4><p class="card-text">Ventas netas en el último día</p></div>
      </div>
    </div>

    <div class="col-sm-2">
      <div class="card">
        <div class="card-header">Clientes</div>
        <div class="card-body"><h4 class="card-title">'.$customers.'</h4><p class="card-text">Total clientes registrados</p></div>
      </div>
    </div>

    <div class="col-sm-2">
      <div class="card">
        <div class="card-header">Reparto</div>
        <div class="card-body"><h4 class="card-title">'.$delivery.'</h4><p class="card-text">Total pedidos en reparto</p></div>
      </div>
    </div>

    <div class="col-sm-2">
      <div class="card">
        <div class="card-header">Espera Reparto</div>
        <div class="card-body"><h4 class="card-title">'.$deliveryWaiting.'</h4><p class="card-text">Pedidos en espera de reparto</p></div>
      </div>
    </div>

    <div class="col-sm-2">
      <div class="card">
        <div class="card-header">Preparación</div>
        <div class="card-body"><h4 class="card-title">'.$cooking.'</h4><p class="card-text">Pedidos en preparación</p></div>
      </div>
    </div>

    <div class="col-sm-2">
      <div class="card">
        <div class="card-header">Espera Preparación</div>
        <div class="card-body"><h4 class="card-title">'.$cookingWaiting.'</h4><p class="card-text">Pedidos en espera de preparación</p></div>
      </div>
    </div>

  ');

?>