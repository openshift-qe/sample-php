<?php
require 'vendor/autoload.php';
$mysql_ip = getenv('DATABASE_SERVICE_HOST');
$mysql_user = getenv('MYSQL_USER');
$mysql_password = getenv('MYSQL_PASSWORD');
$mysql_databse = getenv('MYSQL_DATABASE');

@$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);

$link = mysqli_connect($mysql_ip, $mysql_user, $mysql_password, $mysql_databse);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else {
   printf("Database connection is successful");
}

?>
