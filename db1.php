 <?php
 $dbPassword = "akshaya@123";
 $dbUserName = "akshaya";
 $dbServer = "localhost";
 $dbName = "db1";

 $connection = new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);
 print_r($connection);

 if($connection->connect_errno)
{
 exit("Database connection Failed. Reason: ".$connection->connect_error);
}

$query = "INSERT INTO sample(name,email,location,id) VALUES('Raju','raju@123','chennai',123)";
$connection->query($query);
$connection->close();

?>