<?php
  include('pisa_v0.php');
  $productId = $_GET["productId"];
  $productClass = $_GET["productClass"];
  $productDescription = $_GET["productDescription"];
  $productPrice = $_GET["productPrice"];
  echo editProduct ( $productId, $productClass , $productDescription , $productPrice );
?>