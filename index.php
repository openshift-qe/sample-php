<?php
require 'vendor/autoload.php';
$mail_object =& Mail::factory('sendmail', array("sendmail_path" => "/usr/sbin/sendmail"));
print_r($mail_object);
echo "<br />";

header('content-type:text/html;charset=utf-8');
try {  
    $db = new PDO('mysql:host=172.17.0.5;dbname=root', 'user', 'pass');  
    //查询  
	$rows = $db->query('SELECT * from members')->fetchAll(PDO::FETCH_ASSOC);
	$rs = array();
    foreach($rows as $row) {  
        $rs[] = $row; 
    }  
    $db = null;  
} catch (PDOException $e) {  
    print "Error!: " . $e->getMessage() . "<br/>";  
    die();  
}
print_r($rs);

?>
