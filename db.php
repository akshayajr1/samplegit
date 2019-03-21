<?php
 $dbPassword = "akshayajanardhanan";
 $dbUserName = "akshaya";
 $dbServer = "localhost";
 $dbName = "database 1";

 $connection = new mysqli("localhost", "root","", "abc");
 print_r($connection);

 if($connection->connect_errno)
{
 exit("Database connection Failed. Reason: ".$connection->connect_error);
}

?>