<html>

    <head>
        <script>

            function createJson()
            { 

                var DB_HOST = document.getElementById("DB_HOST").value;
                var DB_USER = document.getElementById("DB_USER").value;
                var DB_NAME = document.getElementById("DB_NAME").value;
                var DB_PASS = document.getElementById("DB_PASS").value;
                var APP_CUST = document.getElementById("APP_CUST").value;
                var APP_LOGO = "./img/logo-delivery.jpg";

                if ( DB_HOST == '' || DB_USER == '' || DB_NAME == '' || DB_PASS == '' || APP_CUST == '' || APP_LOGO == '' )
                {
                    alert('Faltan datos necesarios');
                }
                else
                {
                    var createJsonHttp = './config/config-json.php?DB_HOST=' + DB_HOST + '&DB_USER=' + DB_USER + '&DB_NAME=' + DB_NAME + '&DB_PASS=' + DB_PASS + '&APP_CUST=' + APP_CUST + '&APP_LOGO=' + APP_LOGO;
                    
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("GET", createJsonHttp , false);
                    xmlhttp.send();
                    if ( xmlhttp.status == 200 )
                    {
                        if ( xmlhttp.responseText == 'DONE' ) { alert('Datos cargados exitosamente'); }
                        else { alert('No fue posible cargar los datos del nuevo cliente'); }
                    }

                }
                
            }

            function uploadFile() 
            {

                var formData = new FormData();
                var fileField = document.getElementById("image-file");
                var logoViewer = document.getElementById("logo-viewer");

                formData.append('uploadedfile', fileField.files[0]);

                fetch( '/config/config-upload.php', { method: 'POST', body: formData } )
                    .then(response => response.json())
                    .catch(error => console.error('Error:', error))
                    .then(response => console.log('Success:', response))
                    .then( logoViewer.src = "./img/logo-delivery.jpg" )
                    .then( alert("Archivo subido exitosamente") );
            
            }

        </script>
    </head>

    <body>

        <div class="container">

            <div class="jumbotron">

                <div class="float-right">
                    <img src="img/icono-torre-pisa.png" height="120px"  class="rounded" alt="Logo Su-Pizza">
                </div>
                <h1 class="display-4">Pisa</h1>
                <p class="lead">Haciendo simple la gestión de tu delivery</p>
                
                <hr class="my-4">
                
                <ion-icon name="logo-html5"></ion-icon>
                <ion-icon name="logo-javascript"></ion-icon>
                <img class="float-right" src="img/logo_php.png">

            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabBaseDatos" role="tab" aria-controls="tabBaseDatos" aria-selected="true">Configurar base de datos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabPersonalizaApp" role="tab" aria-controls="tabPersonalizaApp" aria-selected="true">Personalizá aplicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabFinalizar" role="tab" aria-controls="tabFinalizar" aria-selected="true">Finalizar</a>
                </li>
            </ul>

            <div class="tab-content" >

                <div class="tab-pane fade show active" id="tabBaseDatos" role="tabpanel" aria-labelledby="tabBaseDatos">
                        <form >
                            <br>
                            <label for="DB_HOST">Servidor de base de datos</label>
                            <input type="text" class="form-control col-sm-3" id="DB_HOST" name="DB_HOST">
                            <br>
                            <label for="DB_NAME">Nombre de la base de datos</label>
                            <input type="text" class="form-control col-sm-3" id="DB_NAME" name="DB_NAME">
                            <br>
                            <label for="DB_USER">Usuario</label>
                            <input type="text" class="form-control col-sm-3" id="DB_USER" name="DB_USER">
                            <br>
                            <label for="DB_PASS">Password</label>
                            <input type="password" class="form-control col-sm-3" id="DB_PASS" name="DB_PASS">
                        </form>
                        <hr class="my-4">
                </div>

                <div class="tab-pane fade show" id="tabPersonalizaApp" role="tabpanel" aria-labelledby="tabPersonalizaApp">
                    <form>
                        <br>
                        <div class="float-right">
                            <img src="img/icono-torre-pisa.png" height="150px" alt="logo" id="logo-viewer">
                        </div>
                        <label for="APP_CUST">Nombre de tu delivery</label>
                        <input type="text" class="form-control col-sm-3" id="APP_CUST" name="APP_CUST">
                        <br>
                        <label for="APP_LOGO">Logo</label><br>
                        <input  type="file" id="image-file" />
                        <br><br>
                        <button type="button" class="btn btn-primary" onclick="uploadFile();" >Subir Logo</button>
                    </form>
                    <hr class="my-4">
                </div>

                <div class="tab-pane fade show" id="tabFinalizar" role="tabpanel" aria-labelledby="tabFinalizar">
                    <form>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="createJson();" >Guardar Configuración</button>
                    </form>
                    <hr class="my-4">
                </div>

            </div>

        </div>

    </body>

</html>