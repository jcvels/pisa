<?php
  include('pisa_v0.php');
  $productId = $_GET["productId"];
  echo delProduct( $productId );
?>