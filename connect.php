<?php
define("db_host","localhost");
define("db_user","root");
define("db_password","root");
define("db_db","database");

$connect = new mysqli(db_host, db_user, db_password, db_db);
$sql = "SELECT * FROM `product`";
$result = $connect->query($sql);
for($user=array();$row = $result->fetch_assoc(); $user[]= $row);

$connect->close();
 ?>