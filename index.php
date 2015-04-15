<?php
require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
?>
