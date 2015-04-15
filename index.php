<?php
require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
echo "<br />";
$con = mysql_connect("ENV['DATABASE_SERVICE_HOST']","user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create table in my_db database
mysql_select_db("php", $con);
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
