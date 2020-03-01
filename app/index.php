<?php
  include('./lang/español.php');
  include('./src/pisa_v0.php');
?>

<!DOCTYPE html>
<html lang="es-ES">
<html>
    <head>
        <title><?php echo str_app_name; ?> | <?php echo str_app_customer; ?></title>
        <link rel="shortcut icon" type="image/png" href="img/icono-torre-pisa.png"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/js-snackbar.min.css">
        <link rel="stylesheet" href="css/pisa.css">
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/js-snackbar.min.js"></script>
        <script src="js/beep.js"></script>
        <script src="js/printThis.js"></script>
    </head>
    <body id="fullScreen" class="pisa-body">

        <?php 
        
        if ( file_exists ( 'pisa_config.json' ) )
        {
            include "views/navbar.php";
            include "views/footer.php";
        }
        else
        {
            include "install/index.php";
        }
        
        ?>

    </body>
    <script src="js/pisa_v0.js"></script>
</html>