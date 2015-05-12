<?php
require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
echo "<br />";
$con = mysqli_connect("172.17.0.10","user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }

mysqli_query($con,"CREATE TABLE Language LIKE CountryLanguage");
mysqli_query($con, "INSERT INTO Language VALUES ('DEU', 'Bavarian', 'F', 11.2)");
mysqli_query($con, "INSERT INTO Language VALUES ('DEU', 'Swabian', 'F', 9.4)");
#mysqli_commit($con);

if ($result = mysqli_query($con, "SELECT * FROM Language")) {
    echo($result);
}
mysqli_close($con);

?>
