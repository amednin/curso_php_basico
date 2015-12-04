<?php

$link = mysql_connect('localhost', 'root', '123');
if (!$link) {
    die('No se pudo conectar: ' . mysql_error());
}
echo 'Connectado exitosamente!';
mysql_close($link);