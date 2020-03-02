<?php
  include('pisa_v0.php');
  $promoClass = $_GET["promoClass"];
  $promoDescription = $_GET["promoDescription"];
  $promoContent = $_GET["promoContent"];
  $promoPrice = $_GET["promoPrice"];
  echo newPromo ( $promoClass, $promoDescription , $promoContent , $promoPrice );
?>