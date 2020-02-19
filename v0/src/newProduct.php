<?php
  include('pisa_v0.php');
  $productClass = $_GET["productClass"];
  $productDescription = $_GET["productDescription"];
  $productPrice = $_GET["productPrice"];
  echo newProduct ( $productClass , $productDescription , $productPrice );
?>