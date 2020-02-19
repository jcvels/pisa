<?php
  include('pisa_v0.php');
  $customerId = $_GET["customerId"];
  echo delCustomer( $customerId );
?>