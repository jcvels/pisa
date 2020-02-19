<?php
  include('../lang/es-ar.php');
  include('../src/pisa_v0.php');
?>

<!-- INICIO PRODUCTOS--> 

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><?php echo str_app_name; ?></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo str_lbl_products; ?></li>
  </ol>
</nav>

<div class="form-row">
  <div class="form-group col-9">
    <input class="form-control" type="search" placeholder="Buscar..." id="buscador" onkeyup="tableFilter('buscador','searchTarget');">
  </div>
  <div class="form-group col-3">
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#productModal" onclick="clearForms('productForm');"><?php echo str_btn_add; ?></button>
  </div>
</div>

<div>
  <table class="table table-hover" id="searchTarget">
    <tbody>
      <?php
        $str = getdatalist('product');
        $data = json_decode($str, true);
        foreach ( $data as $obj )
        {
          print(' 
            <tr>
            <td>#'. $obj['id'] .'</td>
            <td>'. $obj['productClass'] .'</td>
            <td>'. $obj['productDescription'] .'</td>
            <td>$'. $obj['productPrice'] .'</td>   
            <td>
            <div class="btn-group   float-right" role="group">
              <button type="button" class="btn btn-outline-primary btn-sm" onclick="delProduct(\''. $obj['id'] .'\');">'.str_btn_delete.'</button>
              <button type="button" class="btn btn-outline-primary btn-sm"onclick="showProductForm(\''. $obj['id'] .'\',\''. $obj['productClass'] .'\',\''. $obj['productDescription'] .'\',\''. $obj['productPrice'] .'\');">'.str_btn_edit.'</button>
            </div>
            </td></tr>
          ');
        }
      ?>
    </tbody>
  </table>
</div>

<!-- FIN PRODUCTOS -->
