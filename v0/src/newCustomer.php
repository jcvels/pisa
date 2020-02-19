<?php
  include('pisa_v0.php');
  $customerName = $_GET["customerName"];
  $customerAddress = $_GET["customerAddress"];
  $customerNearStreetA = $_GET["customerNearStreetA"];
  $customerNearStreetB = $_GET["customerNearStreetB"];
  $customerPhone = $_GET["customerPhone"];
  echo newCustomer( $customerName , $customerAddress , $customerNearStreetA, $customerNearStreetB, $customerPhone );
?>