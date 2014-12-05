<?php
//localhost
//$link = mysqli_connect("localhost", "root", "123", "mibasededatos");

//$link = mysqli_connect("sql309.260mb.net", "n260m_15584688", "Admin123", "n260m_15584688_login");
$link = mysqli_connect("mysql.hostinger.es", "u676488434_root", "petardas123", "u676488434_tacos");
/* check connection */ 
if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

printf("Host information: %s\n", mysqli_get_host_info($link));

/* close connection */
mysqli_close($link);

?>