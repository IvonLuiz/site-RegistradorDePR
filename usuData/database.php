<?php
/* Código para conectar ao database */

$host = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";


$mysqli = mysqli_connect(hostname:$host,
               username: $username, 
               password: $password,
               database: $dbname);
                          
if($mysqli -> connect_errno){
    die("Falhou em conectar!") . $mysqli->connect_error;
}

return $mysqli;