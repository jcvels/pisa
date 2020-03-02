<?php
  include('../lang/es-ar.php');
  include('../src/pisa_v0.php');
?>

<!-- INICIO NUEVO PEDIDO -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><?php echo str_app_name; ?></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo str_lbl_neworder; ?></li>
  </ol>
</nav>

<div class="container-fluid">
    <div class="row">
        
        <div class="col-2">

            <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabPromosPizza" role="tab" aria-controls="tabPromosPizza" aria-selected="true">Promociones Pizzas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabPromosMinuta" role="tab" aria-controls="tabPromosMinuta" aria-selected="true">Promociones Minutas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabProductPizza" role="tab" aria-controls="tabProductPizza" aria-selected="true">Pizzas y Empanadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabPizzaPorcion" role="tab" aria-controls="tabPizzaPorcion" aria-selected="true">Pizzas por Porción</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabMinutas" role="tab" aria-controls="tabMinutas" aria-selected="true">Minutas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabBebidas" role="tab" aria-controls="tabBebidas" aria-selected="true">Bebidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabCustomers" role="tab" aria-controls="tabCustomers" aria-selected="false"><?php echo str_lbl_customers; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#finish" role="tab" aria-controls="finish" aria-selected="false"><?php echo str_lbl_finishorder; ?></a>
                </li>
            </ul>
        </div>

        <div class="col">

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="tabPromosPizza" role="tabpanel" aria-labelledby="tabPromosPizza-tab"> <!-- PANEL DE PROMOCIONES PIZZAS -->
                    <input type="text" class="form-control" id="promoFinder" onkeyup="tableFilter('promoFinder','findPromoDuringOrderingTarget');" placeholder="<?php echo str_lbl_search; ?>"><br>
                    <table class="table table-hover" id="findPromoDuringOrderingTarget"><tbody>
                    <?php
                        $str = getdatalist('productPizzaPromocion');
                        $data = json_decode($str, true);
                        foreach ( $data as $obj )
                        {
                        print('
                            <tr onclick="addPromo2Order( \''. $obj['description'] .'\',\''. $obj['content'] .'\',\''. $obj['price'] .'\');">
                            <td>'. $obj['description'] .'</td>
                            <td>'. $obj['content'] .'</td>
                            <td>$'. $obj['price'] .'</td>   
                            </tr>
                        ');
                        }
                    ?>
                    </tbody></table>
                </div>

                <div class="tab-pane fade show" id="tabPromosMinuta" role="tabpanel" aria-labelledby="tabPromosMinuta-tab"> <!-- PANEL DE PROMOCIONES MINUTAS -->
                    <input type="text" class="form-control" id="promoMinutaFinder" onkeyup="tableFilter('promoMinutaFinder','promoMinutaTable');" placeholder="<?php echo str_lbl_search; ?>"><br>
                    <table class="table table-hover" id="promoMinutaTable"><tbody>
                    <?php
                        $str = getdatalist('productMinutaPromocion');
                        $data = json_decode($str, true);
                        foreach ( $data as $obj )
                        {
                        print('
                            <tr onclick="addPromo2Order( \''. $obj['description'] .'\',\''. $obj['content'] .'\',\''. $obj['price'] .'\');">
                            <td>'. $obj['description'] .'</td>
                            <td>'. $obj['content'] .'</td>
                            <td>$'. $obj['price'] .'</td>   
                            </tr>
                        ');
                        }
                    ?>
                    </tbody></table>
                </div>

                <div class="tab-pane fade show" id="tabProductPizza" role="tabpanel" aria-labelledby="tabProductPizza-tab"> <!-- PANEL PIZZAS Y EMPANADAS -->
                    <input type="text" class="form-control" id="promoPizzaFinder" onkeyup="tableFilter('promoPizzaFinder','promoPizzaTable');" placeholder="<?php echo str_lbl_search; ?>"><br>
                    <table class="table table-hover" id="promoPizzaTable"><tbody>
                    <?php
                        $str = getdatalist('productPizza');
                        $data = json_decode($str, true);
                        foreach ( $data as $obj )
                        {
                        print('
                            <tr onclick="addItem2Order( \''. $obj['productClass'] .'\',\''. $obj['productDescription'] .'\',\''. $obj['productPrice'] .'\');">
                            <td>'. $obj['productClass'] .'</td>
                            <td>'. $obj['productDescription'] .'</td>
                            <td>$'. $obj['productPrice'] .'</td>   
                            </tr>
                        ');
                        }
                    ?>
                    </tbody></table>
                </div>

                <div class="tab-pane fade show" id="tabPizzaPorcion" role="tabpanel" aria-labelledby="tabPizzaPorcion-tab"> <!-- PANEL PIZZAS POR PORCIÓN -->
                    <input type="text" class="form-control" id="tabPizzaPorcionFinder" onkeyup="tableFilter('tabPizzaPorcionFinder','tabPizzaPorcionTable');" placeholder="<?php echo str_lbl_search; ?>"><br>
                    <table class="table table-hover" id="tabPizzaPorcionTable"><tbody>
                    <?php
                        $str = getdatalist('productPizzaPorcion');
                        $data = json_decode($str, true);
                        foreach ( $data as $obj )
                        {
                        print('
                            <tr onclick="addItem2Order( \''. $obj['productClass'] .'\',\''. $obj['productDescription'] .'\',\''. $obj['productPrice'] .'\');">
                            <td>'. $obj['productClass'] .'</td>
                            <td>'. $obj['productDescription'] .'</td>
                            <td>$'. $obj['productPrice'] .'</td>   
                            </tr>
                        ');
                        }
                    ?>
                    </tbody></table>
                </div>

                <div class="tab-pane fade show" id="tabMinutas" role="tabpanel" aria-labelledby="tabMinutas-tab"> <!-- PANEL MINUTAS -->
                    <input type="text" class="form-control" id="tabMinutasFinder" onkeyup="tableFilter('tabMinutasFinder','tabMinutasTable');" placeholder="<?php echo str_lbl_search; ?>"><br>
                    <table class="table table-hover" id="tabMinutasTable"><tbody>
                    <?php
                        $str = getdatalist('productMinutas');
                        $data = json_decode($str, true);
                        foreach ( $data as $obj )
                        {
                        print('
                            <tr onclick="addItem2Order( \''. $obj['productClass'] .'\',\''. $obj['productDescription'] .'\',\''. $obj['productPrice'] .'\');">
                            <td>'. $obj['productClass'] .'</td>
                            <td>'. $obj['productDescription'] .'</td>
                            <td>$'. $obj['productPrice'] .'</td>   
                            </tr>
                        ');
                        }
                    ?>
                    </tbody></table>
                </div>

                <div class="tab-pane fade show" id="tabBebidas" role="tabpanel" aria-labelledby="tabBebidas-tab"> <!-- PANEL BEBIDAS -->
                    <input type="text" class="form-control" id="tabBebidasFinder" onkeyup="tableFilter('tabBebidasFinder','tabBebidasTable');" placeholder="<?php echo str_lbl_search; ?>"><br>
                    <table class="table table-hover" id="tabBebidasTable"><tbody>
                    <?php
                        $str = getdatalist('productBebidas');
                        $data = json_decode($str, true);
                        foreach ( $data as $obj )
                        {
                        print('
                            <tr onclick="addItem2Order( \''. $obj['productClass'] .'\',\''. $obj['productDescription'] .'\',\''. $obj['productPrice'] .'\');">
                            <td>'. $obj['productClass'] .'</td>
                            <td>'. $obj['productDescription'] .'</td>
                            <td>$'. $obj['productPrice'] .'</td>   
                            </tr>
                        ');
                        }
                    ?>
                    </tbody></table>
                </div>

                <div class="tab-pane fade" id="tabCustomers" role="tabCustomers" aria-labelledby="contact-tab"> <!-- PANEL DE CLIENTES -->

                    <form id="customerFormDuringOrdering" autocomplete="off">
                        <div class="form-row">
                            <div class="col-6"> 
                                <input type="tel" class="form-control" id="customerFinder" onkeyup="tableFilter('customerFinder','findCustomerDuringOrderingTarget');" placeholder="<?php echo str_lbl_phone; ?>">          
                            </div>
                            <div class="col-4"> 
                                <input type="text" class="form-control" id="customerNameDuringOrdering" placeholder="<?php echo str_lbl_name; ?>">
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-primary float-right" onclick="newCustomerDuringOrdering();"><?php echo str_btn_save; ?></button>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-6"> 
                                <input type="text" class="form-control" id="customerAddressDuringOrdering" placeholder="<?php echo str_lbl_address; ?>">
                            </div>
                            <div class="col-3"> 
                                <input type="text" class="form-control" id="customerNearStreetADuringOrdering" placeholder="Entre calle">
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" id="customerNearStreetBDuringOrdering" placeholder="Y calle">
                            </div>
                        </div>                   
                    </form>
                    
                    <br>
                    
                    <table class="table table-hover" id="findCustomerDuringOrderingTarget"><tbody>
                    <?php
                        $str = getdatalist('customer');
                        $data = json_decode($str, true);
                        foreach($data as $obj)
                        {
                        print('
                            <tr onclick="addCustomer2Order(\'' . $obj['name'] . '\',\'' . $obj['address'] . '\',\'' . $obj['nearStreetA'] . '\',\'' . $obj['nearStreetB'] . '\',\'' . $obj['phone'] . '\');">
                            <td>'. $obj['phone'] .'</td> 
                            <td>'. $obj['name'] .'</td>
                            <td>'. $obj['address'] .' [ '. $obj['nearStreetA'] .' | '. $obj['nearStreetB'] .' ]</td>
                            </tr>
                        ');
                        }
                    ?>
                    </tbody></table>

                </div>
                
                <div class="tab-pane fade" id="finish" role="tabpanel" aria-labelledby="contact-tab"> <!-- PANEL FNALIZAR PEDIDO -->
                    
                    <div class="col-12">
                        <div class="form-row">
                            <div class="col-4">
                                <input type="number" class="form-control" id="discount" onkeyup="setDiscount2Order();" placeholder="¿Descuento?">
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control" id="surcharge" onkeyup="setSurcharge2Order();" placeholder="¿Recargo?">
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control" id="payment" onkeyup="setPayment2Order();" placeholder="¿Con cuanto paga?">
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-10">
                                <input type="text" class="form-control" id="notes2Add" placeholder="¿Algún comentario adicional?">
                            </div>
                            <div class="col-2">
                                <button class="btn btn-outline-primary" onclick="addNotes2Order();" ><?php echo str_btn_add; ?></button>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">Resumen</div>
                            <div class="card-body row">
                                <div class="col-4">
                                    Subtotal $<spam  id="orderSubtotal">0</spam><br>
                                    Descuento $<spam  id="orderDiscount">0</spam><br>
                                    Recargo $<spam  id="orderSurchange">0</spam>
                                </div>

                                <div class="col-4">
                                    <h1>$<spam  id="orderTotal">0</spam></h1>
                                </div>
                                <div class="col-4">
                                    Paga con $<spam  id="orderPayment">0</spam><br>
                                    Vuelto $<spam  id="orderChange">0</spam>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">Notas</div>
                            <div class="card-body" id="orderNotes">.</div>
                        </div>
                    </div>

                    <br>

                    <div class="col-12">
                        <button class="btn btn-outline-danger float-right" onclick="addNewOrder();" ><?php echo str_btn_finishorder; ?></button>
                    </div>


                </div>

            </div>

        </div>

        <div class="col-3">
        
            <div class="card">
                <div class="card-header">Pedido</div>
                <div class="card-body" id="customerOrder"></div>
            </div>
            
            <br>
            
            <div class="card">
                <div class="card-header">Cliente</div>
                <div class="card-body" id="orderCustomerInfo"></div>
            </div>

        </div>

    </div>
      
</div>

<!-- FIN NUEVO PEDIDO -->
