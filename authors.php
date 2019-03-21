<?php
 $dbPassword = "akshaya@123";
 $dbUserName = "akshaya";
 $dbServer = "localhost";
 $dbName = "db1";

 $connection = new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);
 

 if($connection->connect_errno)
{
 exit("Database connection Failed. Reason: ".$connection->connect_error);
}

$query = "INSERT INTO authors(first_name,last_name,pen_name) VALUES('chetan','Bagath','writer')";
$connection->query($query);
$connection->close();

?>