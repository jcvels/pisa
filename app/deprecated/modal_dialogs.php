
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
              <input type="tel" class="form-control" id="customerPhone">          
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
            <label><?php echo str_lbl_listto; ?></label>

            <select type="text" class="form-control" id="productListTo">
              <option value="pizza">pizza</option>
              <option value="pizzaPorcion">pizzaPorcion</option>
              <option value="pizzaPromocion">pizzaPromocion</option>
              <option value="minutas">minutas</option>
              <option value="minutasPromocion">minutasPromocion</option>
              <option value="bebidas">bebidas</option>
            </select>

          </div>
          <div class="form-group">
            <label><?php echo str_lbl_class; ?></label>
            <input type="text" class="form-control" id="productClass">
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

<div class="modal fade" tabindex="-1" role="dialog" id="keypadModal"><!-- TECLADO NUMERICO -->
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title"><?php echo str_lbl_keypad; ?></h5>
      </div>

      <div class="modal-body">

        <input type="number" class="btn btn-outline-primary btn-block" value="" id="selectedQtty" />

        <br>

        <div class="row">
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="7" id="numpad7" /></div>
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="8" id="numpad8" /></div>
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="9" id="numpad9" /></div>
        </div>

        <br>
        
        <div class="row">
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="4" id="numpad4" /></div>
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="5" id="numpad5" /></div>
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="6" id="numpad6" /></div>
        </div>
        
        <br>
        
        <div class="row">
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="1" id="numpad1" /></div>
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="2" id="numpad2" /></div>
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="3" id="numpad3" /></div>
        </div>
        
        <br>
        
        <div class="row">
          <div class="col-4"><input type="button" class="btn btn-info btn-block" value="0" id="numpad0" /></div>
          <div class="col-4"></div>
          <div class="col-4"><input type="button" class="btn btn-secondary btn-block" value="CE" id="numpadClear" /></ion-icon></div>
        </div>

        <br>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearForms('productForm');"><?php echo str_btn_cancel; ?></button>
        <button type="button" class="btn btn-primary" id="numpadSave"><?php echo str_btn_save; ?></button>
      </div>
      
    </div>
  </div>
</div>

<!-- FIN MODAL DIALOGS -->
