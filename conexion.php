<?php


// datos para la coneccion a mysql
//define('DB_SERVER','localhost');
//define('DB_NAME','taqueria');
//define('DB_USER','root');
//define('DB_PASS','123');

define('DB_SERVER','mysql.hostinger.es');
define('DB_NAME','u676488434_tacos');
define('DB_USER','u676488434_root');
define('DB_PASS','petardas123');

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS)or die("Error en Conexion");
$db=mysql_select_db(DB_NAME,$con)or die("Error en Db");

return($con);
return($db);

?>