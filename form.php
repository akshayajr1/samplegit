




<!DOCTYPE html>
<html>
<head>
<script>
function myfunction()
{
var first= document.getElementById("firstname").value;
var last= document.getElementById("lastname").value;
var pen= document.getElementById("penname").value;

}

</script>
</head>
<body>
<form>
First Name: <input type="text" name="fname" id="firstname"><br><br>
Last Name:<input type="text" name="lname" id="lastname"><br><br>
pen name: <input type="text" name="pname" id="penname"><br><br>
<input type="submit" id="button" onclick="myfunction()">

</form>
</body>
</html>

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

$query = "INSERT INTO authors(first_name,last_name,pen_name) VALUES(first,last,pen)";
$connection->query($query);
$connection->close();

?>