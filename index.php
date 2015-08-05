<?php
require 'vendor/autoload.php';

@$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);

$host = getenv("DATABASE_SERVICE_HOST");
$database = getenv("MYSQL_DATABASE");
$username = getenv("MYSQL_USER");
$password = getenv("MYSQL_PASSWORD");

$link = mysqli_connect($host,$username,$password,$database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else {
   printf("Database connection is successful");
}

?>
