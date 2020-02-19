
<!-- INICIO BARRA DE NAVEGACIÓN SUPERIOR -->

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light border-bottom border-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" style="cursor: pointer" id="btmDashboard"><?php echo str_app_customer; ?></a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn btn-light" style="cursor: pointer" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo str_btn_menu; ?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a  class="dropdown-item showOnClose" id="btmOpenShop">Abrir local</a>
          <a  class="dropdown-item showOnOpen" id="btmCloseShop">Cerrar local</a>
          <div class="dropdown-divider"></div>
          <a  class="dropdown-item" id="btmProducts"><?php echo str_lbl_products; ?></a>
          <a  class="dropdown-item" id="btmPromos"><?php echo str_lbl_promos; ?></a>
          <a  class="dropdown-item" id="btmCustomers"><?php echo str_lbl_customers; ?></a>
          <div class="dropdown-divider"></div>
          <a  class="dropdown-item" id="btmAllOrders"><?php echo  str_lbl_orderslist; ?></a>
          <a  class="dropdown-item" id="btnReports"><?php echo str_lbl_reports; ?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" id="btnHelp">Ayuda</a>
          <a class="dropdown-item" id="btnAbout">Acerca de</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" id="btnExit">Salir</a>
          <!--<div class="dropdown-divider"></div>
          <a class="dropdown-item" id="btnFullscreen">Pantalla completa</a>          
          <a class="dropdown-item" id="btnConfig">Configuración</a>
          <a class="dropdown-item" id="btnBackup">Copia de seguridad</a>          
          <div class="dropdown-divider"></div>-->
        </div>       
      </div>

    </div>  

    <div class="btn-group" role="group">
      <button type="button" class="btn btn-outline-dark showOnOpen" id="btmOrdes">Gestor de Pedidos</button>
      <button type="button" class="btn btn-outline-dark showOnOpen" id="btnNeworder">Nuevo Pedido</button>
      <button type="button" class="btn btn-danger showOnClose"><?php echo str_lbl_closedshop; ?></button>
    </div>

  </div>
</nav>

<!-- FIN BARRA DE NAVEGACIÓN SUPERIOR -->

<div style="padding-top: 70px;" ></div>
<div class="container-fluid" id="main"></div> 

<!-- INICIO MODAL DIALOGS -->

<div class="modal fade" tabindex="-1" role="dialog" id="customerModal"><!-- FORMULARIO CLIENTE -->
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo str_lbl_customers; ?></h5>
      </div>
      <div class="modal-body">
        
        <form id="customerForm"><input type="hidden" class="form-control" id="customerId">
          <div class="form-row">
            <div class="col-6"> 
              <label><?php echo str_lbl_phone; ?></label>
              <input type="number" class="form-control" id="customerPhone">          
            </div>
            <div class="col-6"> 
              <label><?php echo str_lbl_name; ?></label>
              <input type="text" class="form-control" id="customerName">
            </div>
          </div>
          <div class="form-row">
            <div class="col-12"> 
              <label><?php echo str_lbl_address; ?></label>
              <input type="text" class="form-control" id="customerAddress">
            </div>
          </div>

          <div class="form-row">
            <div class="col-6"> 
              <label>Entre calle</label>
              <input type="text" class="form-control" id="customerNearStreetA">
            </div>
            <div class="col-6 ">
              <label>y calle</label>
              <input type="text" class="form-control" id="customerNearStreetB">
            </div>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearForms('customerForm');"><?php echo str_btn_cancel; ?></button>
        <button type="button" class="btn btn-primary" onclick="newCustomer();"><?php echo str_btn_save; ?></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="promoModal"><!-- FORMULARIO PROMOCIÓN -->
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo str_lbl_promos; ?></h5>
      </div>
      <div class="modal-body">
        <form id="promoForm">
          <input type="hidden" class="form-control" id="promoId">
          <div class="form-group">
            <label><?php echo str_lbl_class; ?></label>  
            <select type="text" class="form-control" id="promoClass">
              <option value="Promoción Pizza">Promoción Pizza</option>
              <option value="Promoción Minuta">Promoción Minuta</option>
            </select>
          </div>
          <div class="form-group">
            <label><?php echo str_lbl_description; ?></label>
            <input type="text" class="form-control" id="promoDescription">
          </div>
          <div class="form-group">
            <label><?php echo str_lbl_contet; ?></label>
            <input type="text" size=250 class="form-control" id="promoContent">
          </div>
          <div class="form-group">
            <label><?php echo str_lbl_price; ?></label>
            <input type="number" class="form-control" id="promoPrice">
          </div>
        </form> 
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearForms('promoForm');"><?php echo str_btn_cancel; ?></button>
        <button type="button" class="btn btn-primary" onclick="newPromo();"><?php echo str_btn_save; ?></button>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="productModal"><!-- FORMULARIO PRODUCTO -->
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo str_lbl_products; ?></h5>
      </div>
      <div class="modal-body">
        <form id="productForm">
          <input type="hidden" class="form-control" id="productId">
          <div class="form-group">
            <label><?php echo str_lbl_class; ?></label>

            <select type="text" class="form-control" id="productClass">
              <option value="Pizza">Pizza</option>
              <option value="Porción de Pizza">Porción de Pizza</option>
              <option value="Empanada">Empanada</option>
              <option value="Milanesa">Milanesa</option>
              <option value="Hamburguesa">Hamburguesa</option>
              <option value="Minutas">Minutas</option>
              <option value="Bebida">Bebidas</option>
            </select>

          </div>
          <div class="form-group">
            <label><?php echo str_lbl_description; ?></label>
            <input type="text" size=250 class="form-control" id="productDescription">
          </div>
          <div class="form-group">
            <label><?php echo str_lbl_price; ?></label>
            <input type="number" class="form-control" id="productPrice">
          </div>
        </form> 
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearForms('productForm');"><?php echo str_btn_cancel; ?></button>
        <button type="button" class="btn btn-primary" onclick="newProduct();"><?php echo str_btn_save; ?></button>
      </div>
      
    </div>
  </div>
</div>



<div class="modal fade" tabindex="-1" role="dialog" id="phoneModal"><!-- TELEFONO -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h1 id="showPhone">(00) 0000-00000<h1>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="welcomeModal"><!-- WELCOME -->
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-body">
        
      <div class="alert alert-secondary alert-dismissible fade show container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <h1 class="display-4"><?php echo str_app_name; ?></h1><p class="text-muted float-right"><?php echo str_app_version; ?></p>
              <p class="lead">Haciendo simple la gestión de <?php echo str_app_customer; ?></p>     
            </div>    
            <div class="col-2">
              <img src="<?php echo str_app_logo ?>" height=120px class="rounded" alt="Customer Logo">
            </div>
          </div>
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      

      <div class="alert alert-warning alert-dismissible fade show container" role="alert">
        <div class="container">
          <p><strong>ATENCIÓN:</strong> Esta apllicación aun se encuentra en desarrollo. Los comentarios sobre tu experiencia con esta demo seran muy valorados. Por favor, contanos tu experiencia por correo a <a href="mailto:info@uvcoding.com.ar">info@uvcoding.com.ar</a>. Muchas Gracias!</p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>

      </div>

    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="printModal"><!-- PRINT -->
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">

      <div class="modal-body" id="div2print">
        <div id="div2print"></div>
      </div>

    </div>
  </div>
</div>

<!-- FIN MODAL DIALOGS -->
