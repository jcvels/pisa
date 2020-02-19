<?php
  include('pisa_v0.php');
  $customerId = $_GET["customerId"];
  $customerName = $_GET["customerName"];
  $customerAddress = $_GET["customerAddress"];
  $customerPhone = $_GET["customerPhone"];
  echo editCustomer( $customerId, $customerName, $customerAddress, $customerPhone );
?>