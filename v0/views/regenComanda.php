<?php
    include('../lang/es-ar.php');
    include('../src/pisa_v0.php');

    if ( isset ( $_GET["id"] ) ) { $id = $_GET["id"]; }

    $str = getdatalist( $id );
    $data = json_decode($str, true);
    foreach($data as $obj)
    {
        print('
                <h2>'. str_app_customer .'</h2>    
                <h3>ORDEN #'. $obj['id'] .'</h3>
                <h4>PEDIDO</h4>
                '. $obj['customerOrder'] .'
                <h4>ENTREGA</h4>
                '. $obj['customerAddress'] .'<br>
                '. $obj['customerName'] .' ( '. $obj['customerPhone'] .' )
                <h4>NOTAS</h4>
                '. $obj['notes'] .'
                <h4>TOTAL: $'. $obj['totalOrder'] .'</h4>
                Paga con: $'. $obj['orderPayment'] .'<br>Vuelto: $'. $obj['orderChange'] .'
                <br><br>'. str_app_name .'('. str_app_version .')
                <br><br>NO VALIDO COMO FACTURA
        ');
    }
?>