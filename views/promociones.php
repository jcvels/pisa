<?php
  include('../lang/es-ar.php');
  include('../src/pisa_v0.php');
?>

<!-- INICIO PROMOCIONES -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><?php echo str_app_name; ?></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo str_lbl_promos; ?></li>
  </ol>
</nav>

<div class="form-row">
  <div class="form-group col-9">
    <input class="form-control" type="search" placeholder="Buscar..." id="buscador" onkeyup="tableFilter('buscador','searchTarget');">
  </div>
  <div class="form-group col-3">
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#promoModal"><?php echo str_btn_add; ?></button>
  </div>
</div>

<div>
  <table class="table table-hover" id="searchTarget">
    <tbody>
      <?php
        $str = getdatalist('promo');
        $data = json_decode($str, true);
        foreach($data as $obj)
        {
          print('
            <tr>
            <td>#'. $obj['id'] .'</td>
            <td>'. $obj['class'] .'</td>
            <td>'. $obj['description'] .'</td>
            <td>'. $obj['content'] .'</td>
            <td>$'. $obj['price'] .'</td>          
            <td>
            <div class="btn-group  float-right" role="group">
            <button type="button" class="btn btn-outline-primary btn-sm" onclick="delPromo(\''. $obj['id'] .'\');">'.str_btn_delete.'</button>
            <button type="button" class="btn btn-outline-primary btn-sm" onclick="showPromoEditForm(\''. $obj['id'] .'\',\''. $obj['class'] .'\',\''. $obj['description'] .'\',\''. $obj['content'] .'\',\''. $obj['price'] .'\');">'.str_btn_edit.'</button>
            </div>
            </td></tr>
          ');
        }
      ?>
    </tbody>
  </table>
</div>

<!-- FIN PROMOCIONES -->
