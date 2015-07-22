<?php
require 'vendor/autoload.php';

@$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);

$link = mysqli_connect('172.17.0.6','userTDA','RLeOLTVP','root');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else {
   printf("Database connection is successful");
}

?>
