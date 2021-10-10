<?php


include_once 'db/db.class.php';

$dbclass = new DBClass();
$connection = $dbclass->getConnection();

echo $connection;



?>
