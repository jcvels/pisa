/*
* Pisa
* Version: 0
* Autor: Jorge Pauvels jcvels@uvcoding.com.ar
* Edición: 28/12/2019
*/

/* WELCOME */
console.log("Bienvenido a Pisa | Haciendo simple la gestión de tu delivery");

/* DEFAULT LISTENERS */
document.getElementById("btmDashboard").addEventListener("click", function(){ cargar("dashboard"); } );
document.getElementById("btmOpenShop").addEventListener("click", function(){ openShop(); } );
document.getElementById("btmCloseShop").addEventListener("click", function(){ closeShop(); } );
document.getElementById("btmProducts").addEventListener("click", function(){ cargar("products"); } );
document.getElementById("btmPromos").addEventListener("click", function(){ cargar("promociones"); } );
document.getElementById("btmCustomers").addEventListener("click", function(){ cargar("customers"); } );
document.getElementById("btmAllOrders").addEventListener("click", function(){ cargar("allorders"); } );
//document.getElementById("btnConfig").addEventListener("click", function(){ cargar("config.php"); } );
document.getElementById("btnReports").addEventListener("click", function(){ cargar("sales"); } );
//document.getElementById("btnBackup").addEventListener("click", function(){ cargar("backup.php"); } );
document.getElementById("btnHelp").addEventListener("click", function(){ cargar("help"); } );
document.getElementById("btnAbout").addEventListener("click", function(){ cargar("about"); } );
document.getElementById("btnExit").addEventListener("click", function(){ cargar("login"); } ); /* <-- Determinar si usa página o función */
document.getElementById("btmOrdes").addEventListener("click", function(){ cargar("orders"); } );
document.getElementById("btnNeworder").addEventListener("click", function(){ cargar("neworder"); } );
/* document.getElementById("numpad1").addEventListener("click", function(){ selectedQtty.value += "1"; } );
document.getElementById("numpad2").addEventListener("click", function(){ selectedQtty.value += "2"; } );
document.getElementById("numpad3").addEventListener("click", function(){ selectedQtty.value += "3"; } );
document.getElementById("numpad4").addEventListener("click", function(){ selectedQtty.value += "4"; } );
document.getElementById("numpad5").addEventListener("click", function(){ selectedQtty.value += "5"; } );
document.getElementById("numpad6").addEventListener("click", function(){ selectedQtty.value += "6"; } );
document.getElementById("numpad7").addEventListener("click", function(){ selectedQtty.value += "7"; } );
document.getElementById("numpad8").addEventListener("click", function(){ selectedQtty.value += "8"; } );
document.getElementById("numpad9").addEventListener("click", function(){ selectedQtty.value += "9"; } );
document.getElementById("numpad0").addEventListener("click", function(){ selectedQtty.value += "0"; } );
document.getElementById("numpadClear").addEventListener("click", function(){ selectedQtty.value = ""; } ); */

/* INICIAL ACTIONS */
cargar("dashboard");
if ( getShopState() == 'close' ) { turnElements2CloseShopMode(); }
else { turnElements2OpenShopMode(); }
$("#welcomeModal").modal('show');
setTimeout( function () { $("#welcomeModal").modal('hide'); } , 5000);

/* CONFIG */
var baseUrl = 'https://supizza.uvcoding.com.ar/app/v0' ; 

/* FUNCTIONS */
function cargar(destino) { /* Carga las diferentes secciones en el #main div */
  $("#main").load("views/" + destino + ".php");
}
function badgeUpdate() { 
  $("#badgeContainer").load("views/badgeGenerator.php");
}
function pisaNotifier(notifierClass, notifierMessage) { /* Muesta alertas al usuario 1=ERROR | 2=INFO | 3=OK */
  var notifierError = function () { SnackBar({ message: notifierMessage, status: "danger" }); play([[860, 0.1], [860, 0.1], [860, 0.1]]); }
  var notifierInfo = function () { SnackBar({ message: notifierMessage, status: "warning" }) }
  var notifierOk = function () { SnackBar({ message: notifierMessage, status: "success" }) }
  switch (notifierClass) {
    case '1':   notifierError();  break;
    case '2':   notifierInfo();   break;
    case '3':   notifierOk();     break;
    default: ; break;
  }
}
function openFullscreen() { /* Turn app to fullscreen mode */
    var elem = document.getElementById("fullScreen");

    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) { /* Firefox */
        elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE/Edge */
        elem.msRequestFullscreen();
    }
}
function tableFilter( buscardor, buscado ) { /* Table filter to quick information location */
  // Declare variables 
  var input, filter, table, tr, td, i, j, visible;
  input = document.getElementById( buscardor );
  filter = input.value.toUpperCase();
  table = document.getElementById( buscado );
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    visible = false;
    /* Obtenemos todas las celdas de la fila, no sólo la primera */
    td = tr[i].getElementsByTagName("td");
    for (j = 0; j < td.length; j++) {
      if (td[j] && td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
        visible = true;
      }
    }
    if (visible === true) {
      tr[i].style.display = "";
    } else {
      tr[i].style.display = "none";
    }
  }
}
function newCustomer() { /* Get data (customerName, customesAddress and customesPhone) from newCustomerForm and send to http API to record into DB  */

  var newCustomerForm = document.getElementById("customerForm");
  var customerId = document.getElementById("customerId").value;
  var customerName = document.getElementById("customerName").value;
  var customerAddress = document.getElementById("customerAddress").value;
  var customerNearStreetA = document.getElementById("customerNearStreetA").value;
  var customerNearStreetB = document.getElementById("customerNearStreetB").value;
  var customerPhone = document.getElementById("customerPhone").value;

  if ( customerId == '' ) /* Carga nuevo cliente o edita cliente existente cliente */
  {
    if ( customerName == '' || customerAddress == '' || customerNearStreetA == '' || customerNearStreetB == '' || customerPhone == '' )
    {
      pisaNotifier('1','Debe completar todos los valores del formulario');
    }
    else
    {
      var newCustomerHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/newCustomer.php?customerName=' + customerName + '&customerAddress=' + customerAddress + '&customerNearStreetA=' + customerNearStreetA + '&customerNearStreetB=' + customerNearStreetB + '&customerPhone=' + customerPhone;
      
      if ( dataManager ( newCustomerHttp, 'customers') ) { pisaNotifier('3','Datos de cliente cargados exitosamente'); $('#customerModal').modal('hide'); newCustomerForm.reset(); }
      else { pisaNotifier('1','No fue posible cargar los datos del nuevo cliente'); }
    }
  }
  else /* Edición de cliente existente */
  {
    if ( customerId == '' || customerName == '' || customerAddress == '' || customerNearStreetA == '' || customerNearStreetB == '' || customerPhone == '' )
    {
      pisaNotifier('1','Debe completar todos los valores del formulario');
    }
    else
    {
      var newCustomerHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/editCustomer.php?customerId='+ customerId + '&customerName=' + customerName + '&customerAddress=' + customerAddress + '&customerNearStreetA=' + customerNearStreetA + '&customerNearStreetB=' + customerNearStreetB + '&customerPhone=' + customerPhone;
      if ( dataManager ( newCustomerHttp, 'customers' ) ) { pisaNotifier('3','Datos de cliente actualizados exitosamente'); $('#customerModal').modal('hide'); newCustomerForm.reset(); }
      else { pisaNotifier('1','No fue posible actualizar los datos el cliente'); }
    }
  }
}
function newCustomerDuringOrdering(){

  var customerFormDuringOrdering = document.getElementById("customerFormDuringOrdering");
  var customerName = document.getElementById("customerNameDuringOrdering").value;
  var customerAddress = document.getElementById("customerAddressDuringOrdering").value;
  var customerNearStreetA = document.getElementById("customerNearStreetADuringOrdering").value;
  var customerNearStreetB = document.getElementById("customerNearStreetBDuringOrdering").value;
  var customerPhone = document.getElementById("customerFinder").value;

  if ( customerName == '' || customerAddress == '' || customerNearStreetA == '' || customerNearStreetB == '' || customerPhone == '' )
  {
    pisaNotifier('1','Debe completar todos los valores del formulario');
  }
  else
  {
    var newCustomerHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/newCustomer.php?customerName=' + customerName + '&customerAddress=' + customerAddress + '&customerNearStreetA=' + customerNearStreetA + '&customerNearStreetB=' + customerNearStreetB + '&customerPhone=' + customerPhone;
    
    if ( dataManager ( newCustomerHttp, '') ) { 
      pisaNotifier('3','Datos de cliente cargados exitosamente');
      addCustomer2Order( customerName, customerAddress, customerNearStreetA, customerNearStreetB, customerPhone );
      customerFormDuringOrdering.reset();
    }
    else { pisaNotifier('1','No fue posible cargar los datos del nuevo cliente'); }
  }
}
function delCustomer( id ) { /* Elimina usuario según id */
  if( confirm('Seguro quiere eliinar al cliente con ID #' + id) )
  {
    var delCustomerHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/delCustomer.php?customerId=' + id ;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() 
    { if (this.readyState == 4 && this.status == 200) 
      { 
        var delCustomerReply = this.responseText;
        if( delCustomerReply == '1' ) 
        { 
          pisaNotifier('3','Cliente eliminado exitosamente');
          cargar('customers');
        }
        else { pisaNotifier('1','No fue posible eliminar al cliente'); }
      } 
    };
    xmlhttp.open("GET", delCustomerHttp , true);
    xmlhttp.send();
  }
  else { pisaNotifier('2','Ningún cliente fue eliminado'); }   
}
function showCustomerForm( Id, Name, Address, NearStreetA, NearStreetB, Phone ) {
  var customerId = document.getElementById("customerId");
  var customerName = document.getElementById("customerName");
  var customerAddress = document.getElementById("customerAddress");
  var customerNearStreetA = document.getElementById("customerNearStreetA");
  var customerNearStreetB = document.getElementById("customerNearStreetB");
  var customerPhone = document.getElementById("customerPhone");
  customerId.value = Id;
  customerName.value = Name;
  customerAddress.value = Address;
  customerNearStreetA.value = NearStreetA;
  customerNearStreetB.value = NearStreetB;
  customerPhone.value = Phone;
  $('#customerModal').modal('show');
}
function newPromo() {
  var promoForm = document.getElementById("promoForm");
  var promoId = document.getElementById("promoId").value;
  var promoClass = document.getElementById("promoClass").value;
  var promoDescription = document.getElementById("promoDescription").value;
  var promoContent = document.getElementById("promoContent").value;
  var promoPrice = document.getElementById("promoPrice").value;
  if ( promoId == '' ) /* Se trata de una nueve promoción */
  {
    if ( promoDescription == '' || promoContent == '' || promoPrice == '' )
    {
      pisaNotifier('1','Debe completar todos los valores del formulario');
    }
    else
    {
      var newPromoHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/newPromo.php?promoClass=' + promoClass +'&promoDescription=' + promoDescription +'&promoContent='+ promoContent +'&promoPrice='+ promoPrice;
      var dataManagerReply = dataManager( newPromoHttp, 'promociones');
      if ( dataManagerReply ) { pisaNotifier('3','Promoción cargada exitosamente'); $('#promoModal').modal('hide'); promoForm.reset();}
      else { pisaNotifier('1','No fue posible grabar la promoción'); } 
    }
  }
  else /* Se trata de una modificación de una promoción existente */
  {
    if ( promoId == '' || promoDescription == '' || promoContent == '' || promoPrice == '' )
    {
      pisaNotifier('1','Debe completar todos los valores del formulario');
    }
    else
    {
      var newPromoHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/editPromo.php?promoId=' + promoId + '&promoClass=' + promoClass +'&promoDescription=' + promoDescription +'&promoContent='+ promoContent +'&promoPrice='+ promoPrice;
      var dataManagerReply = dataManager( newPromoHttp, 'promociones');
      if ( dataManagerReply ) { pisaNotifier('3','Promoción actualizada exitosamente'); $('#promoModal').modal('hide'); promoForm.reset(); }
      else { pisaNotifier('1','No fue posible actualizar la promoción'); }
    }
  }
}
function showPromoEditForm( Id, Class, Description, Content, Price ) {
  
  var promoId = document.getElementById("promoId");
  var promoClass = document.getElementById("promoClass");
  var promoDescription = document.getElementById("promoDescription");
  var promoContent = document.getElementById("promoContent");
  var promoPrice = document.getElementById("promoPrice");
  
  promoId.value = Id;
  promoClass.value = Class;
  promoDescription.value = Description;
  promoContent.value = Content;
  promoPrice.value = Price;

  $('#promoModal').modal('show');

}
function delPromo( id ) { /* Elimina usuario según id */
  if( confirm('Seguro quiere eliinar la promoción con ID #' + id) )
  {
    var delPromoHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/delPromo.php?promoId=' + id;
    if ( dataManager( delPromoHttp, 'promociones' ) ) { pisaNotifier('3','Promoción eliminada exitosamente'); }
    else { pisaNotifier('1','No fue posible eliminar la promoción'); }
  }
  else { pisaNotifier('2','Ninguna promoción fue eliminada'); }   
}
function newProduct() {
  var productForm = document.getElementById("productForm");
  var productId = document.getElementById("productId").value;
  var productClass = document.getElementById("productClass").value;
  var productDescription = document.getElementById("productDescription").value;
  var productPrice = document.getElementById("productPrice").value;
  
  if (  productId == '' ) /* Nuevo producto */
  {
    if ( productClass == '' || productDescription == '' || productPrice == '' )
    {
      pisaNotifier('1','Debe completar todos los valores del formulario');
    }
    else
    {
      var newProductHttp = baseUrl + '/src/newProduct.php?productClass=' + productClass +'&productDescription='+ productDescription +'&productPrice='+ productPrice;
      if ( dataManager( newProductHttp, 'products') ) { pisaNotifier('3','Producto cargado exitosamente'); $('#productModal').modal('hide'); productForm.reset();}
      else { pisaNotifier('1','No fue posible cargar el producto'); }
    }
  }
  else /* Edicion de producto */
  {
    if ( productId == '' || productClass == '' || productDescription == '' || productPrice == '' )
    {
      pisaNotifier('1','Debe completar todos los valores del formulario');
    }
    else
    {
      var editProductHttp = baseUrl + '/src/editProduct.php?productId='+ productId + '&productClass=' + productClass +'&productDescription='+ productDescription +'&productPrice='+ productPrice;
      if ( dataManager( editProductHttp, 'products') ) { pisaNotifier('3','Producto actualizado exitosamente'); $('#productModal').modal('hide'); productForm.reset();}
      else { pisaNotifier('1','No fue posible actualizar el producto'); }
    }
  }
}
function delProduct( id ) { /* Elimina producto según ID */
  if( confirm('Seguro quiere eliinar el producto con ID #' + id) )
  {
    var delProductHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/delProduct.php?productId=' + id;
    if ( dataManager( delProductHttp, 'products' ) ) { pisaNotifier('3','Producto eliminado exitosamente'); }
    else { pisaNotifier('1','No fue posible eliminar el producto'); }
  }
  else { pisaNotifier('2','Ningun producto fue eliminado'); }
}
function showProductForm( Id, Class, Description, Price) {

  var productId = document.getElementById("productId");
  var productClass = document.getElementById("productClass");
  var productDescription = document.getElementById("productDescription");
  var productPrice = document.getElementById("productPrice");

  productId.value = Id;
  productClass.value = Class;
  productDescription.value = Description;
  productPrice.value = Price;

  $('#productModal').modal('show');
}
function dataManager( connectTo, thenLoad) {
   //  > TRUE si la conexión y la respuesta fueron correctas.
  //   > FALSE en caso de error.
  var xmlhttp = new XMLHttpRequest();
  var dataManagerReply = 0;
  var xmlhttpReply;
  console.log ( '# <UV/> debug info: server requirement: --> ' + connectTo );
  xmlhttp.open("GET", connectTo , false);
  xmlhttp.send();
  if ( xmlhttp.status == 200 ) 
    if ( xmlhttp.responseText == 1 ) { dataManagerReply = true; }
    else { dataManagerReply = false; }
  else { dataManagerReply = false; }
  console.log ( '# <UV/> debug info: server reply: --> ' + xmlhttp.responseText );
  if( thenLoad ) { cargar( thenLoad ); };
  return dataManagerReply;
}
function play(keys) {
  var key = keys.shift();
  if(typeof key == 'undefined') return; // song ended
  new Beep(22050).play(key[0], key[1], [Beep.utils.amplify(8000)], function() { play(keys); });
}
function clearForms(formulario) {
  var form2Clear = document.getElementById(formulario);
  form2Clear.reset();
}
function addItem2Order( itemClass, itemDescription, itemPrice ) { /* Show numpad in screen and retunr entered qtty */

  var customerOrder = document.getElementById("customerOrder"); 
  var selectedQtty = document.getElementById("selectedQtty");
  var selectedValue;

  $('#keypadModal').modal('show');

  document.getElementById("numpadSave").addEventListener("click", function()
  { 
    
    selectedValue = selectedQtty.value;

    if(selectedValue != '' ) 
    {
      $('#keypadModal').modal('hide');

      var autoid = ramdomGenerator();
      var calPrice = parseInt(selectedValue) * parseInt(itemPrice);
      
      selectedQtty.value = "";
      
      customerOrder.innerHTML += "<spam class=\"badge badge-secondary pisa-order-item\" id=\""+ autoid +"\" onclick=\"removeItem('"+ autoid +"','"+ calPrice +"');\")>" + selectedValue + "x " + itemClass + " " + itemDescription + " ($" + calPrice + ")</spam><br>";
      addAmount2Order ( calPrice );
      
      this.removeEventListener('click',arguments.callee,false);
      
      pisaNotifier('3','Se agregó el item al pedido');
    }
    else
    {
      pisaNotifier('1','Debe especificar un valor');
    }
   
  } );

}
function addPromo2Order( itemClass, itemDescription, itemPrice ) { /* Show numpad in screen and retunr entered qtty */

  var customerOrder = document.getElementById("customerOrder"); 
  var selectedQtty = document.getElementById("selectedQtty");
  var selectedValue;

  $('#keypadModal').modal('show');

  document.getElementById("numpadSave").addEventListener("click", function()
  { 
    
    selectedValue = selectedQtty.value;

    if(selectedValue != '' ) 
    {
      $('#keypadModal').modal('hide');

      var autoid = ramdomGenerator();
      var calPrice = parseInt(selectedValue) * parseInt(itemPrice);
      
      selectedQtty.value = "";
      
      customerOrder.innerHTML += "<spam class=\"badge badge-secondary pisa-order-item\" id=\""+ autoid +"\" onclick=\"removeItem('"+ autoid +"','"+ calPrice +"');\")>" + selectedValue + "x " + itemClass + " (" + itemDescription + ") ($" + calPrice + ")</spam><br>";
      addAmount2Order ( calPrice );
      
      this.removeEventListener('click',arguments.callee,false);
      
      pisaNotifier('3','Se agregó el item al pedido');
    }
    else
    {
      pisaNotifier('1','Debe especificar un valor');
    }
   
  } );

}
function removeItem( id, price ){
  var tobedeleted = document.getElementById( id );
  tobedeleted.remove();
  remAmount2Order( price );

  pisaNotifier('3','Se eliminó el item de la orden');

}
function addCustomer2Order ( orderCustomerName, orderCustomerAddress, orderCustomerNearStreetA, orderCustomerNearStreetB, orderCustomerPhone) {

  var orderCustomerInfo = document.getElementById("orderCustomerInfo");

  orderCustomerInfo.innerHTML = '<spam class="badge badge-dark" id="orderCustomerName">'+ orderCustomerName
    +'</spam> <spam class="badge badge-primary" id="orderCustomerPhone">'+ orderCustomerPhone
    +'</spam><br> <spam class="badge badge-secondary" id="orderCustomerAddress">'+ orderCustomerAddress
    +'</spam> <spam class="badge badge-secondary" id="orderCustomerNearStreetA">'+ orderCustomerNearStreetA
    +'</spam> <spam class="badge badge-secondary" id="orderCustomerNearStreetB">'+ orderCustomerNearStreetB;

  pisaNotifier('3','Se agregó el cliente al pedido');

}
function addNotes2Order( ) {
  
  var notes2Add = document.getElementById("notes2Add");
  var orderNotes = document.getElementById("orderNotes");
  orderNotes.innerHTML = notes2Add.value;

  pisaNotifier('3','Se agregó la nota al pedido');

}
function addAmount2Order ( newAmount )  {
  var orderSubtotal = document.getElementById("orderSubtotal");
  orderSubtotal.innerText = parseInt(newAmount) + parseInt( orderSubtotal.innerText );
  calcOrderTotal()
}
function remAmount2Order ( newAmount )  {
  var orderSubtotal = document.getElementById("orderSubtotal");
  orderSubtotal.innerText = parseInt( orderSubtotal.innerText ) - parseInt( newAmount );
  calcOrderTotal();
}
function setDiscount2Order ( )  {
  var discount = document.getElementById("discount");
  var orderDiscount = document.getElementById("orderDiscount");
  orderDiscount.innerText = discount.value;
  calcOrderTotal()
}
function setSurcharge2Order ( )  {
  var surcharge = document.getElementById("surcharge");
  var orderSurchange = document.getElementById("orderSurchange");
  orderSurchange.innerText = surcharge.value;
  calcOrderTotal()
}
function setPayment2Order( ) {
  var payment = document.getElementById("payment");
  var orderPayment = document.getElementById("orderPayment");
  orderPayment.innerText = payment.value;
  calcOrderTotal()
}
function calcOrderTotal() {

  var orderSubtotal = document.getElementById("orderSubtotal");
  var orderDiscount = document.getElementById("orderDiscount");
  var orderSurchange = document.getElementById("orderSurchange");
  var orderPayment = document.getElementById("orderPayment");
  var orderChange = document.getElementById("orderChange");
  var orderTotal = document.getElementById("orderTotal");
  
  orderTotal.innerText = parseInt( orderSubtotal.innerText ) - parseInt( orderDiscount.innerText ) + parseInt( orderSurchange.innerText );
  orderChange.innerText = parseInt( orderPayment.innerText ) - parseInt( orderTotal.innerText );

}
function turnElements2CloseShopMode() {

  var showOnOpen = document.getElementsByClassName('showOnOpen');
  var showOnClose = document.getElementsByClassName('showOnClose');
  
  for (var i = 0; i < showOnOpen.length ; i++) {
    showOnOpen[i].style.display = 'none';
  }

  for (var i = 0; i < showOnClose.length ; i++) {
    showOnClose[i].style.display = '';
  }

}
function turnElements2OpenShopMode() {

  var showOnOpen = document.getElementsByClassName('showOnOpen');
  var showOnClose = document.getElementsByClassName('showOnClose');
  
  for (var i = 0; i < showOnOpen.length ; i++) {
    showOnOpen[i].style.display = '';
  }

  for (var j = 0; j < showOnClose.length ; j++) {
    showOnClose[j].style.display = 'none';
  }

}
function getShopState() {
  
  var connectTo = 'https://supizza.uvcoding.com.ar/app/v0/src/shiftManager.php?action=state';

  var xmlhttp = new XMLHttpRequest();
  var dataManagerReply = 'close';

  var xmlhttpReply;
  xmlhttp.open("GET", connectTo , false);
  xmlhttp.send();
  if ( xmlhttp.status == 200 ) 
    if ( xmlhttp.responseText == 'close' ) { dataManagerReply = 'close'; }
    else { dataManagerReply = xmlhttp.responseText; }
  else { dataManagerReply = 'close'; }

  console.log ( '# <UV/> debug info: server reply: --> ' + xmlhttp.responseText );
  
  return dataManagerReply;

}
function openShop() {

  if ( confirm('¿ Quiere abrir el local ?') )
  {
    var openShopHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/shiftManager.php?action=open';

    if ( dataManager( openShopHttp, 'orders' ) )
    {
      pisaNotifier('3','A trabajar! Tu local ya está abierto y listo para recibir pedidos, exitos!');
      turnElements2OpenShopMode();
    }
    else { pisaNotifier('1','No fue posible abrir el local'); }
  } 
}
function closeShop() {

  if ( dataManager( 'https://supizza.uvcoding.com.ar/app/v0/views/checkPendingOrders.php' ) )
  {
    if ( confirm('¿ Quiere cerrar el local ?') )
    {
      var closeShopHttp = 'https://supizza.uvcoding.com.ar/app/v0/src/shiftManager.php?action=close&id=' + getShopState() ;

      if ( dataManager( closeShopHttp, 'dashboard' ) )
      {
        pisaNotifier('3','Buen trabajo! Tu local ya está cerrado. Llegó la hora de un descanso, a frisfrutarlo!');
        turnElements2CloseShopMode();
      }
      else { pisaNotifier('1','No fue posible cerrar el local'); }
    }
  }
  else { pisaNotifier('1','No es posible cerrar el local. Existen pedidos pendientes de finalizar.'); }
}
function ramdomGenerator() {
  var replay = Math.random() * (100 - 10) + 10;
  return replay;
}
function addNewOrder() {

  var orderShift = getShopState();
  var customerName = document.getElementById("orderCustomerName").innerText;
  var customerAddress = document.getElementById("orderCustomerAddress").innerText + ' [ ' + document.getElementById("orderCustomerNearStreetA").innerText + ' / ' + document.getElementById("orderCustomerNearStreetB").innerText + ' ]';
  var customerPhone = document.getElementById("orderCustomerPhone").innerText;
  var customerOrderContainer = document.getElementsByClassName("pisa-order-item");
  var orderSubtotal = document.getElementById("orderSubtotal").innerText;
  var orderDiscount = document.getElementById("orderDiscount").innerText;
  var orderSurcharge = document.getElementById("orderSurchange").innerText;
  var orderPayment = document.getElementById("orderPayment").innerText;
  var orderChange = document.getElementById("orderChange").innerText;
  var totalOrder = document.getElementById("orderTotal").innerText;
  var notes = document.getElementById("orderNotes").innerHTML;
  
  var customerOrder = ' ';

  for ( var i=0; i < customerOrderContainer.length; i++) { customerOrder += customerOrderContainer[i].innerText + '<br>'; }

  if ( orderShift == '' || customerName == '' || customerPhone == '' || customerOrder == '' || totalOrder == '' ) { pisaNotifier('1','Debe completar los datos mínimos del pedido'); }
  else
  {
    addNewOrderHttp = baseUrl + '/src/orderManager.php?action=new&orderShift='+orderShift+'&customerName='+customerName+'&customerAddress='+customerAddress+'&customerPhone='+customerPhone+'&customerOrder='+customerOrder+'&orderSubtotal='+orderSubtotal+'&orderDiscount='+orderDiscount+'&orderSurcharge='+orderSurcharge+'&orderPayment='+orderPayment+'&orderChange='+orderChange+'&totalOrder='+totalOrder+'&notes='+notes;

    if ( dataManager( addNewOrderHttp, 'orders' ) ) { pisaNotifier('3','Se cargo correctamente el pedido' ); setTimeout( function() { printOrder(); } , 3000 ); }
    else { pisaNotifier('1','No fue posible cargar el pedido'); }
  }
  
}
function setStateId ( id, stateid) {

  if ( id == '' || stateid == '' ) { pisaNotifier('1','Falta parametro necesario'); }
  else
  {
    setStateIdHttp = baseUrl + '/src/orderManager.php?action=set&id=' + id + '&stateid=' + stateid;
    if ( dataManager( setStateIdHttp, 'orders' ) ) { pisaNotifier('3','Se actualizó el pedido #' + id  ); }
    else { pisaNotifier('1','No fue posible actualizar el estado del pedido'); }
  }

}
function showPhone ( phone ) {
  var showPhone = document.getElementById("showPhone");
  showPhone.innerText = phone;
  $("#phoneModal").modal('show');
  cargar('orders');
}
function rePrintOrder( id ) {

  $("#div2print").load("views/regenComanda.php?id=" + id );
  $("#printModal").modal('show');
  $("#div2print").printThis({
    debug: false,                              // show the iframe for debugging
    importCSS: true,                          // import parent page css
    importStyle: false,                      // import style tags
    printContainer: true,                   // grab outer container as well as the contents of the selector
    //loadCSS: "path/to/my.css",           // path to additional css file - use an array [] for multiple
    pageTitle: "",                        // add title to print page
    removeInline: true,                      // remove all inline styles from print elements
    removeInlineSelector: "body *",          // custom selectors to filter inline styles. removeInline must be true
    printDelay: 333,                        // variable print delay
    header: null,                          // prefix to html
    footer: null,                         // postfix to html
    base: false,                              // preserve the BASE tag, or accept a string for the URL
    formValues: true,                        // preserve input/form values
    canvas: false,                          // copy canvas elements
    //doctypeString: '...',                // enter a different doctype for older markup
    removeScripts: false,                 // remove script tags from print content
    copyTagClasses: false,                   // copy classes from the html & body tag
    beforePrintEvent: null,                 // callback function for printEvent in iframe
    beforePrint: null,                     // function called before iframe is filled
    afterPrint: null                      // function called before iframe is removed
  });
  cargar('orders');  
}
function printOrder( ) {

  $("#div2print").load("views/genComanda.php" );
  $("#printModal").modal('show');
  $("#div2print").printThis({
    debug: false,                              // show the iframe for debugging
    importCSS: true,                          // import parent page css
    importStyle: false,                      // import style tags
    printContainer: true,                   // grab outer container as well as the contents of the selector
    //loadCSS: "path/to/my.css",           // path to additional css file - use an array [] for multiple
    pageTitle: "",                        // add title to print page
    removeInline: true,                      // remove all inline styles from print elements
    removeInlineSelector: "body *",          // custom selectors to filter inline styles. removeInline must be true
    printDelay: 333,                        // variable print delay
    header: null,                          // prefix to html
    footer: null,                         // postfix to html
    base: false,                              // preserve the BASE tag, or accept a string for the URL
    formValues: true,                        // preserve input/form values
    canvas: false,                          // copy canvas elements
    //doctypeString: '...',                // enter a different doctype for older markup
    removeScripts: false,                 // remove script tags from print content
    copyTagClasses: false,                   // copy classes from the html & body tag
    beforePrintEvent: null,                 // callback function for printEvent in iframe
    beforePrint: null,                     // function called before iframe is filled
    afterPrint: null       // function called before iframe is removed
  });
  
}

/* 
* Pisa
* Version: 0
* Autor: Jorge Pauvels jcvels@uvcoding.com.ar
* Edición: 28/12/2019
*/