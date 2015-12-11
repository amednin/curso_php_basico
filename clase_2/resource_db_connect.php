<?php

$host = "webpt.vagrant";
$user = "vagrant";
$pass = "vagrant";
$dbName = "inspeccion";

$mysqli = new mysqli($host, $user, $pass, $dbName);

if($mysqli->connect_errno > 0){
    die('No se puede conectar a la BD [' . $mysqli->connect_error . ']');
}

$result = $mysqli->query("SELECT * FROM movilidad");
$rows = $result->fetch_assoc();
