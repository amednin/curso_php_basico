<?php

                //   host         user    pass   db nombre
$mysqli = new mysqli("localhost", "root", "123", "inspeccion");

$result = $mysqli->query("SELECT * FROM movilidad");
$row = $result->fetch_assoc();
echo '<pre>'; print_r($row); '</pre>';