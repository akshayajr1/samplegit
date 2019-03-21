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

$query= "SELECT first_name, last_name, pen_name FROM authors ORDER BY first_name";
$resultObj = $connection->query($query);

if($resultObj->num_rows > 0)
{
    while ($singleRowFromQuery = $resultObj->fetch_array())
    {
        echo "authors: ".$singleRowFromQuery['first_name'].PHP_EOL;

    }
}

$resultObj->close();
$connection->close();

?>