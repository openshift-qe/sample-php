<?php
require 'vendor/autoload.php';
var mysql_ip = process.env.DATABASE_SERVICE_HOST || "localhost";
@$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
$link = mysqli_connect($mysql_ip, "user", "pass", "root");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else {
   printf("Database connection is successful");
}

?>
