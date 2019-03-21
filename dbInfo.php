<?php

$dbPassword = "shoppingcart";
$dbUserName = "cart";
$dbServer = "localhost";
$dbName = "product";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>