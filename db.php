<?php
$db_server = 'localhost';
$db_name = 'demo';
$db_username = 'root';
$db_password = 'aaa';

$mysqli = mysqli_connect($db_server, $db_username, $db_password, $db_name);

$result = $mysqli->query("SELECT username FROM users LIMIT 10");
$row = $result->fetch_array(MYSQLI_ASSOC);

$data = $row;
?>
