<?php
  include('pisa_v0.php');

  $action = $_GET["action"];
  if ( isset ( $_GET["id"] ) ) { $id = $_GET["id"]; }
  if ( isset ( $_GET["sales"] ) ) { $sales = $_GET["sales"]; }
  if ( isset ( $_GET["orders"] ) ) { $orders = $_GET["orders"]; }


  switch( $action )
  {
    case 'open':  echo openShop(); break;
    case 'close': echo closeShop( $id, calculateSales( $id ), calculateOrdes ( $id ) ); break;
    case 'state': echo shopState(); break;
    default: echo 'Parametro incorrecto';
  }

  function calculateSales( $busc ) {

    $sales = 0;
    $str = getdatalist('thisshiftorders');
    $data = json_decode($str, true);

    foreach($data as $obj)
    {
      if ( $obj['stateid']  == '60' )
      {
        $sales += $obj['totalOrder'];
      }
    }

    return $sales;

  }
  function calculateOrdes ( $busc ) {

    $orders = 0;
    $str = getdatalist('thisshiftorders');
    $data = json_decode($str, true);

    foreach($data as $obj)
    {
      $orders++;
    }

    return $orders;

  }

?>