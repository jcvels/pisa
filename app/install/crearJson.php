<?php

if ( isset ( $_GET["DB_HOST"] ) ) { $DB_HOST = $_GET["DB_HOST"]; }
if ( isset ( $_GET["DB_USER"] ) ) { $DB_USER = $_GET["DB_USER"]; }
if ( isset ( $_GET["DB_NAME"] ) ) { $DB_NAME = $_GET["DB_NAME"]; }
if ( isset ( $_GET["DB_PASS"] ) ) { $DB_PASS = $_GET["DB_PASS"]; }
if ( isset ( $_GET["APP_CUST"] ) ) { $APP_CUST = $_GET["APP_CUST"]; }
if ( isset ( $_GET["APP_LOGO"] ) ) { $APP_LOGO = $_GET["APP_LOGO"]; }

if ( $DB_HOST != null || $DB_USER != null || $DB_NAME != null || $DB_PASS != null || $APP_CUST  != null || $APP_LOGO  != null )
{
        $arr_clientes = array('DB_HOST'=>$DB_HOST,'DB_USER'=>$DB_USER,'DB_NAME'=>$DB_NAME,'DB_PASS'=>$DB_PASS,'APP_CUST'=>$APP_CUST,'APP_LOGO'=>$APP_LOGO);
        $json_string = json_encode($arr_clientes);
        $file = '../pisa_config.json';
        file_put_contents($file, $json_string);
        if ( file_exists ( $file ) ) { echo 'DONE'; }

}

else
{
        echo 'error al guardar la configuración';
}

?>