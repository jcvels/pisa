<?php
  include('pisa_v0.php');
  $promoId = $_GET["promoId"];
  $promoClass = $_GET["promoClass"];
  $promoDescription = $_GET["promoDescription"];
  $promoContent = $_GET["promoContent"];
  $promoPrice = $_GET["promoPrice"];
  echo editPromo ( $promoId, $promoClass, $promoDescription , $promoContent , $promoPrice );
?>