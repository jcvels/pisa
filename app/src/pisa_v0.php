<?php

  define( 'DEBUG', true ); if( DEBUG ) { ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); }

  /* Credenciales de conexión a la DB */
  define( 'DB_HOST', 'localhost' );
  define( 'DB_USER', 'pisav0user' );
  define( 'DB_NAME', 'pisav0supizza' );
  define( 'DB_PASS', 'kwXVnAS6eP43K2MJydtlvjcX');

  function dbQuery( $query ) { /* Conexión y consulta con la base de datos */
    $dblink = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME ); /* Create database connection */
    if ($dblink->connect_errno) { return 'Error al conectar con la base de datos.'; } /* Check connection was successful */
    else { return $dblink->query( $query ); } /* Ejecuta QUERY */
  }
  function getdatalist($option) { /* Genera JSON con listado de Ordenes, Productos, Combos o Clientes */
    if (empty($option)) { return 'Debe especificar una opción.'; }
    else
    {
      /* Ejecuta QUERY según $option */
      switch ($option)
      {
        case 'productPizzaPromocion': $result = dbQuery( 'SELECT * FROM pisa_promos WHERE class = \'Promoción Pizza\'' );  break; /* OK */
        case 'productMinutaPromocion': $result = dbQuery( 'SELECT * FROM pisa_promos WHERE class = \'Promoción Minuta\'' );  break; /* OK */
        case 'productPizza': $result = dbQuery( 'SELECT * FROM pisa_products WHERE productClass = \'Pizza\' OR productClass = \'Empanada\'' );  break; /* OK */
        case 'productPizzaPorcion': $result = dbQuery( 'SELECT * FROM pisa_products WHERE productClass = \'Porción de Pizza\'' );  break; /* OK */
        case 'productMinutas':$result = dbQuery( 'SELECT * FROM pisa_products WHERE productClass = \'Milanesa\' OR productClass = \'Hamburguesa\' OR productClass = \'Minutas\'' );  break; /* OK */  
        case 'productBebidas': $result = dbQuery( 'SELECT * FROM pisa_products WHERE productClass = \'Bebida\'' );  break; /* OK */ 
        case 'product': $result = dbQuery( 'SELECT * FROM pisa_products' ); break; /* OK */ 
        case 'promo': $result = dbQuery( 'SELECT * FROM pisa_promos' ); break; /* OK */ 
        case 'customer': $result = dbQuery( 'SELECT * FROM pisa_customers' ); break; /* OK */ 
        case 'order': $shiftId = shopState(); $result = dbQuery( 'SELECT * FROM pisa_orders WHERE orderShift = \''. $shiftId .'\' AND stateid < 60'); break; /* OK */ 
        case 'allorder': $result = dbQuery( 'SELECT * FROM pisa_orders ORDER BY id DESC' ); break; /* OK */
        case 'thisshiftorders': $shiftId = shopState(); $result = dbQuery( 'SELECT * FROM pisa_orders WHERE orderShift = \''. $shiftId. '\';' ); break; /* OK */
        case 'sales': $result = dbQuery( 'SELECT * FROM pisa_shifts ORDER BY id DESC' ); break;
        case 'order2print': $result = dbQuery( 'SELECT * FROM pisa_orders WHERE stateid = 10 ORDER BY id ASC' ); break;
        default: $result = dbQuery( 'SELECT * FROM pisa_orders WHERE orderShift = '. $option ); break;
      }
      
      $dbdata = array();
      while ( $row = $result->fetch_assoc() )
      {
        $dbdata[]=$row;
      }
      $funcReply = json_encode($dbdata);

      return $funcReply;
    }
  }
  function stateID2stateStr( $stateID ) {
    switch ($stateID)
    {
      case '70':    return '<span class="badge badge-dark">CANCELADO</span>';             break;      
      case '60':    return '<span class="badge badge-success">ENTREGADO</span>';          break; 
      case '50':    return '<span class="badge badge-warning">REPARTO</span>';            break;
      case '40':    return '<span class="badge badge-danger">ESPERA REPARTO</span>';      break;
      case '30':    return '<span class="badge badge-warning">EN PREPARACION</span>';     break;
      case '20':    return '<span class="badge badge-danger">ESPERA PREPARACION</span>';  break;
      case '10':    return '<span class="badge badge-info">NUEVO</span>';                 break;
      default:      return '> ERROR <';                                                   break;
    }
  }
  function newCustomer( $customerName , $customerAddress , $customerNearStreetA, $customerNearStreetB, $customerPhone ) { /* Carga un nuevo cliente */
    if( empty($customerName) | empty($customerAddress) | empty($customerPhone) ) { return 'Debe especificar una opción.'; }
    else { return dbQuery ( "INSERT INTO pisa_customers (name, address, nearStreetA, nearStreetB, phone) VALUES ('". $customerName . "', '". $customerAddress ."' , '". $customerNearStreetA ."' , '". $customerNearStreetB ."' , '" . $customerPhone . "');" ); }
  }
  function editCustomer($customerId, $customerName, $customerAddress, $customerPhone) { /* Edita un cliente */
    if( empty($customerId) | empty($customerName) | empty($customerAddress) | empty($customerPhone) ) { return 'Faltan parametros.'; }
    else { return dbQuery ( "UPDATE pisa_customers SET name='".$customerName."',address='".$customerAddress."',phone='".$customerPhone."' WHERE id = ".$customerId.";" ); }
  }
  function delCustomer($id) { /* Elimina cliente según id */
    if( empty($id) ) { return 'Debe especificar una opción.'; }
    else { return dbQuery( "DELETE FROM pisa_customers WHERE id = '". $id ."';" ); }
  }
  function newPromo($promoClass, $promoDescription, $promoContent, $promoPrice) { /* Carga una nueva promoción */
    if( empty($promoClass) | empty($promoDescription) | empty($promoContent) | empty($promoPrice) ) { return 'Falta parametros necesarios.'; }
    else { return dbQuery ( "INSERT INTO pisa_promos (class, description, content, price) VALUES ('". $promoClass . "', '". $promoDescription . "', '". $promoContent ."' , '" . $promoPrice . "');" ); }
  }
  function editPromo ( $promoId, $promoClass, $promoDescription, $promoContent, $promoPrice ) {  /* Edita una promoción */
    if( empty($promoClass) | empty($promoId) | empty($promoDescription) | empty($promoContent) | empty($promoPrice) ) { return 'Falta parametros necesarios.'; }
    else { return dbQuery ( "UPDATE pisa_promos SET class='". $promoClass ."', description='". $promoDescription ."', content='". $promoContent ."', price='". $promoPrice ."' WHERE id = ". $promoId .";" ); }
  }
  function delPromo($id) { /* Elimina cliente según id */
    if( empty($id) ) { return 'Debe especificar una opción.'; }
    else { return dbQuery( "DELETE FROM pisa_promos WHERE id = '". $id ."';" ); }
  }
  function newProduct ($productClass, $productDescription, $productPrice) {
    if( empty($productClass) | empty($productDescription) | empty($productPrice) ) { return 'Falta parametros necesarios.'; }
    else { return dbQuery ( "INSERT INTO pisa_products (productClass, productDescription, productPrice) VALUES ('". $productClass . "', '". $productDescription ."' , '" . $productPrice . "');" ); }
  }
  function editProduct ($productId, $productClass, $productDescription, $productPrice) {
    if( empty($productId) | empty($productClass) | empty($productDescription) | empty($productPrice) ) { return 'Falta parametros necesarios.'; }
    else { return dbQuery ( "UPDATE pisa_products SET productClass='". $productClass ."', productDescription='". $productDescription ."', productPrice='". $productPrice ."' WHERE id = ". $productId .";" ); }
  }
  function delProduct ($id) { /* Elimina productos según id */
    if( empty($id) ) { return 'Debe especificar una opción.'; }
    else { return dbQuery( "DELETE FROM pisa_products WHERE id = '". $id ."';" ); }
  }
  function openShop() {
    $openQuery = " INSERT INTO pisa_shifts ( state, opentimestamp ) VALUES ( 'open', NOW() ) ";
    return dbQuery( $openQuery );
  }
  function closeShop( $id, $sales, $orders ) {
    /* SELECT * FROM `pisa_orders` WHERE TIMESTAMP(creation) BETWEEN '2020-01-17 00:42:51' AND '2020-01-17 01:01:06' */
    $closeQuery = " UPDATE pisa_shifts SET closetimestamp = NOW(), state = 'close', orderQtty = '". $orders . "', orderTotalAmount = '". $sales . "' WHERE id = '" . $id . "' ";
    return dbQuery( $closeQuery );
  }
  function closeAllShift() {
    $closeQuery = " UPDATE pisa_shifts SET state = 'close' ";
    return dbQuery( $closeQuery );
  }
  function shopState() {

    $stateQuery = " SELECT id FROM pisa_shifts WHERE state = 'open' ";
    $stateQueryReply = dbQuery ( $stateQuery );

    if ( $stateQueryReply->num_rows != 1 )
    {
      closeAllShift();
      return 'close';
    }
    else
    {
      $row = $stateQueryReply->fetch_assoc();
      return $row['id'];
    } 
  }
  function newOrder ( $orderShift, $customerName, $customerAddress, $customerPhone, $customerOrder, $orderSubtotal, $orderDiscount, $orderSurcharge, $orderPayment, $orderChange, $totalOrder, $notes ) {

    if( empty($orderShift) | empty($customerName) | empty($customerAddress) | empty($customerPhone) | empty($customerOrder) | empty($totalOrder) | empty($notes) ) 
    { 
      return 'Falta parametros necesarios.'; 
    }
    else
    { 
      return dbQuery ("INSERT INTO pisa_orders (orderShift, stateid, customerName, customerAddress, customerPhone, customerOrder, orderSubtotal, orderDiscount, orderSurcharge, orderPayment, orderChange, totalOrder, notes) VALUES ('".$orderShift."', '10' ,'".$customerName."','".$customerAddress."','".$customerPhone."','".$customerOrder."','".$orderSubtotal."','".$orderDiscount."','".$orderSurcharge."','".$orderPayment."','".$orderChange."','".$totalOrder."','".$notes."');" );
    }

  }
  function setOrderState( $id, $stateid ) {
    if( empty($id) | empty($stateid) ) { return 'Falta parametros necesarios.'; }
    else { return dbQuery ( "UPDATE pisa_orders SET stateid='". $stateid ."' WHERE id = '". $id ."';" ); }
  }
?>