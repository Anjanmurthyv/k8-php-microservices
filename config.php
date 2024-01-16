<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = '172.31.40.223'; # database server name
$databaseName = 'crud_db'; # database name
$databaseUsername = 'root'; # database username
$databasePassword = 'Anjan#123'; # database password

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
