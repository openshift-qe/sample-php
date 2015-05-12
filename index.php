<?php

require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
echo "<br />";
$con = mysqli_connect("172.17.0.10","user","pass", "root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  exit();
  }

mysqli_query($con,"CREATE TABLE Language LIKE CountryLanguage");
mysqli_query($con, "INSERT INTO Language VALUES ('DEU', 'Bavarian', 'F', 11.2)");
mysqli_query($con, "INSERT INTO Language VALUES ('DEU', 'Swabian', 'F', 9.4)");
mysqli_commit($con);

if ($result = mysqli_query($conn, "SELECT * FROM Language")) {
    echo($result);

mysqli_close($con);

?>

