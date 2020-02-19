<?php
  include('../lang/es-ar.php');
  include('../src/pisa_v0.php');
?>

<!-- INICIO START -->

<div class="alert alert-info container-fluid" role="alert">
  
  <div class="d-flex">
    <h5>Panel de contol</h5>
  </div>

  <div id="badgeContainer" role="group"></div>

  <br>
  
  <div class="d-flex">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">Estado del Clima</div>
        <div id="cont_3cde02893604c034ed3c3f67444a0ee2"><script type="text/javascript" async src="https://www.meteored.com.ar/wid_loader/3cde02893604c034ed3c3f67444a0ee2"></script></div>
      </div>
    </div>
  </div>

  <script> badgeUpdate(); </script>

</div>

<!-- FIN START -->
