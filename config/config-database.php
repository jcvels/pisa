  <?php
  
  /* Credenciales de conexión a la DB */
  define( 'DB_HOST', getDataFromJson('DB_HOST') );
  define( 'DB_USER', getDataFromJson('DB_USER') );
  define( 'DB_NAME', getDataFromJson('DB_NAME') );
  define( 'DB_PASS', getDataFromJson('DB_PASS') );

  function dbQuery( $query ) /* Conexión y consulta con la base de datos */ 
  { 
    $dblink = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME ); /* Create database connection */
    if ($dblink->connect_errno) { return 'Error al conectar con la base de datos.'; } /* Check connection was successful */
    else { return $dblink->query( $query ); } /* Ejecuta QUERY */
  }

  function getDataFromJson( $option )
  {
    $json = file_get_contents('../pisa_config.json');
    $obj = json_decode($json);
    return $obj->{ $option };
  }

  /* Crear Base de datos */

  echo file_get_contents('config-database.sql');