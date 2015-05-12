<?php
require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
echo "<br />";
$con = mysqli_connect("172.17.0.10","user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
  {
   echo "Database conneciton test successfully";  
  }
?>
