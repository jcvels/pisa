<?php
  include('../lang/es-ar.php');
  include('../src/pisa_v0.php');
?>

<!-- INICIO GESTOR DE ORDENES -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><?php echo str_app_name; ?></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo str_lbl_orders; ?></li>
  </ol>
</nav>

<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." id="buscador" onkeyup="tableFilter('buscador', 'searchTarget');"><br>

<section class="container-fluid">
  <table class="table table-hover table-sm" id="searchTarget">
    <?php
      $str = getdatalist('order');
      $data = json_decode($str, true);
      foreach($data as $obj)
      {
        print('
          <tr>
            <td><span class="badge badge-info">#'. $obj['id'] .'</span><br>'. stateID2stateStr($obj['stateid']) .'<br><span class="badge badge-secondary">$ '. $obj['totalOrder'] .'</span></td>
            <td><p>'. $obj['customerName']  .'<br><span class="font-italic">'. $obj['customerAddress']  .'</span><br><span class="text-info">'. $obj['notes'] .'</span></p></td>
            <td><p class="text-pimary">'. $obj['customerOrder']  .'</p></td>
            <td>

              <div class="card">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapse'. $obj['id'] .'" role="button" aria-expanded="false">Opciones</a>

                <div class="dropdown-menu collapse" id="collapse'. $obj['id'] .'">
                  <a  class="dropdown-item" style="cursor: pointer" onclick="rePrintOrder(\''. $obj['id'] .'\');">Reimprimir comanda</a>
                  <a  class="dropdown-item" style="cursor: pointer" onclick="showPhone(\''. $obj['customerPhone'] .'\');">Llamar al cliente</a>
                  <div class="dropdown-divider"></div>
                  <a  class="dropdown-item" style="cursor: pointer" onclick="setStateId(\''. $obj['id'] .'\',\'20\');">Espera Preparación</a>
                  <a  class="dropdown-item" style="cursor: pointer" onclick="setStateId(\''. $obj['id'] .'\',\'30\');">En Preparación</a>
                  <a  class="dropdown-item" style="cursor: pointer" onclick="setStateId(\''. $obj['id'] .'\',\'40\');">Espera Reparto</a>
                  <a  class="dropdown-item" style="cursor: pointer" onclick="setStateId(\''. $obj['id'] .'\',\'50\');">En Reparto</a>
                  <a  class="dropdown-item" style="cursor: pointer" onclick="setStateId(\''. $obj['id'] .'\',\'60\');">Entregado</a>
                  <div class="dropdown-divider"></div>
                  <a  class="dropdown-item" style="cursor: pointer" onclick="setStateId(\''. $obj['id'] .'\',\'70\');">Cancelar pedido</a>
                </div>
              </div>

            </td>
          </tr>
        ');
      }
    ?>
  </table>
</section>

<!-- FIN GESTOR DE ORDENES -->
