<?php

include('../lang/es-ar.php');
include('../src/pisa_v0.php');

$finished =0;
$pending = 0;
$total = 0;

$str = getdatalist('thisshiftorders');
$data = json_decode($str, true);

foreach($data as $obj)
{
  switch ( $obj['stateid'] )
  {
    case '10': $pending++; break;
    case '20': $pending++; break;
    case '30': $pending++; break;
    case '40': $pending++; break;
    case '50': $pending++; break;
    case '60': $finished++; break;
    case '70': $finished++; break;
    default: 
  }
  $total++;
}

if ( $pending == 0 ) { echo '1'; }
else { echo '0'; }

?>