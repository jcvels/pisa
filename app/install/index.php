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
                var APP_LOGO = document.getElementById("APP_LOGO").value;

                if ( DB_HOST == '' || DB_USER == '' || DB_NAME == '' || DB_PASS == '' || APP_CUST == '' || APP_LOGO == '' )
                {
                    alert('Debe completar todos los valores del formulario');
                }
                else
                {
                    var createJsonHttp = './install/crearJson.php?DB_HOST=' + DB_HOST + '&DB_USER=' + DB_USER + '&DB_NAME=' + DB_NAME + '&DB_PASS=' + DB_PASS + '&APP_CUST=' + APP_CUST + '&APP_LOGO=' + APP_LOGO;
                    
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

        </script>
    </head>

    <body>

        <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabPromosPizza" role="tab" aria-controls="tabPromosPizza" aria-selected="true">Base de datos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabPromosMinuta" role="tab" aria-controls="tabPromosMinuta" aria-selected="true">Tu aplicación</a>
            </li>
        </ul>

        <form>
            <label for="DB_HOST">DB_HOST:</label><br>
            <input type="text" class="form-control" id="DB_HOST" name="DB_HOST">
            <br>
            <label for="DB_USER">DB_USER:</label><br>
            <input type="text" class="form-control" id="DB_USER" name="DB_USER">
            <br>
            <label for="DB_NAME">DB_NAME:</label><br>
            <input type="text" class="form-control" id="DB_NAME" name="DB_NAME">
            <br>
            <label for="DB_PASS">DB_PASS:</label><br>
            <input type="password" class="form-control" id="DB_PASS" name="DB_PASS">
            <br>
            <label for="APP_CUST">APP_CUST:</label><br>
            <input type="text" class="form-control" id="APP_CUST" name="APP_CUST">
            <br>
            <label for="APP_LOGO">APP_LOGO:</label><br>
            <input type="text" class="form-control" id="APP_LOGO" name="APP_LOGO">
            <br><br>
            <button type="submit" onclick="createJson();" >Guardar</button>
        </form>
    </body>

</html>
