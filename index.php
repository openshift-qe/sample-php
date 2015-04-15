<?php
require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
$con = mysql_connect("localhost","user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
sql='CREATE DATABASE test DEFAULT CHARACTER SET gbk COLLATE gbk_chinese_ci;
';
mysql_query($sql);
$sql='CREATE TABLE `test` (`id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT ,`count` INT(255) UNSIGNED NOT NULL DEFAULT 0,PRIMARY KEY ( `id` ) ) TYPE = innodb;';
mysql_select_db($mysql_database,$conn);
$result=mysql_query($sql);
//echo $sql;
mysql_close($conn);
echo "Database connected";
?>
