<?php

$link = mysql_connect('webpt.vagrant', 'vagrant', 'vagrant');
if (!$link) {
    die('No se pudo conectar: ' . mysql_error());
}
echo 'Connectado exitosamente!';
mysql_close($link);