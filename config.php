<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'dbserverr.mysql.database.azure.com');
define('DB_USERNAME', 'rootuser@dbserverr');
define('DB_PASSWORD', 'Test@12345');
define('DB_NAME', 'testdb');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>
