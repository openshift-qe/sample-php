<?php
require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
echo "<br />";
$con = mysqli_connect("172.17.0.5","user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE test",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table in test database
mysql_select_db("test", $con);
$sql = "CREATE TABLE Persons 
(
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysql_query($sql,$con);
mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Tina', 'Wang', '30')");

$result = mysql_query("SELECT * FROM Persons");

while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  }

mysql_close($con);
?>
