<?php

  define( 'DEBUG', true ); if( DEBUG ) { ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); }

  /* Credenciales de conexión a la DB */
  define( 'DB_HOST', getDataFromJson('DB_HOST') );
  define( 'DB_USER', getDataFromJson('DB_USER') );
  define( 'DB_NAME', getDataFromJson('DB_NAME') );
  define( 'DB_PASS', getDataFromJson('DB_PASS') );

  function dbCreate( $query ) /* Conexión y consulta con la base de datos */ 
  { 
    $dblink = new mysqli( DB_HOST, DB_USER, DB_PASS ); /* Create database connection */
    if ($dblink->connect_errno) { return 'Error al conectar con la base de datos.'; } /* Check connection was successful */
    else { return $dblink->query( $query ); } /* Ejecuta QUERY */
  }

  function dbQuery( $query ) /* Conexión y consulta con la base de datos */ 
  { 
    $dblink = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME ); /* Create database connection */
    if ($dblink->connect_errno) { return 'Error al conectar con la base de datos.'; } /* Check connection was successful */
    else { return $dblink->multi_query( $query ); } /* Ejecuta QUERY */
  }

  function getDataFromJson( $option )
  {
    $json = file_get_contents('../pisa_config.json');
    $obj = json_decode($json);
    return $obj->{ $option };
  }

  $dbCreationString = "CREATE DATABASE IF NOT EXISTS `" . DB_NAME . "` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;" ;

  /* Ejecutar código SQL */ 
  echo dbCreate( $dbCreationString );
  echo dbQuery ( file_get_contents('config-table.sql') );

?>