<?php

    include('pisa_v0.php');

    $action = $_GET["action"];

    if ( isset ( $_GET["orderShift"] ) ) { $orderShift = $_GET["orderShift"]; }
    if ( isset ( $_GET["customerName"] ) ) { $customerName = $_GET["customerName"]; }
    if ( isset ( $_GET["customerAddress"] ) ) { $customerAddress = $_GET["customerAddress"]; }
    if ( isset ( $_GET["customerPhone"] ) ) {  $customerPhone = $_GET["customerPhone"]; }
    if ( isset ( $_GET["customerOrder"] ) ) { $customerOrder = $_GET["customerOrder"]; }
    if ( isset ( $_GET["orderSubtotal"] ) ) { $orderSubtotal = $_GET["orderSubtotal"]; }
    if ( isset ( $_GET["orderDiscount"] ) ) {  $orderDiscount = $_GET["orderDiscount"]; }
    if ( isset ( $_GET["orderSurcharge"] ) ) {  $orderSurcharge = $_GET["orderSurcharge"]; }
    if ( isset ( $_GET["orderPayment"] ) ) { $orderPayment = $_GET["orderPayment"]; }
    if ( isset ( $_GET["orderChange"] ) ) { $orderChange = $_GET["orderChange"]; }
    if ( isset ( $_GET["totalOrder"] ) ) { $totalOrder = $_GET["totalOrder"]; }
    if ( isset ( $_GET["notes"] ) ) { $notes = $_GET["notes"]; } else { $notes = '----'; }
    if ( isset ( $_GET["id"] ) ) { $id = $_GET["id"]; }
    if ( isset ( $_GET["stateid"] ) ) { $stateid = $_GET["stateid"]; }

    switch ( $action ) {

        case 'new': echo newOrder ( $orderShift, $customerName, $customerAddress, $customerPhone, $customerOrder, $orderSubtotal, $orderDiscount, $orderSurcharge, $orderPayment, $orderChange, $totalOrder, $notes ); break;
        case 'set': echo setOrderState( $id, $stateid ); break;
        default: echo 'parametro incorrecto';

    }

?>