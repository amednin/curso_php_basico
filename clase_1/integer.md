# integer

Es un valor de un conjunto de número naturales.

Pueden estar especificados en 4 bases diferentes

```php
<?php
    $a = 1234; // base decimal
    $a = -123; // un número negativo
    $a = 0123; // base octal (equivalente a 83 decimal)
    $a = 0x1A; // base hexadecimal (equivalente a 26 decimal)
    $a = 0b11111111; // base binaria (equivalente a 255 decimal)
?>
```

El tamaño máximo de un valor entero depende de la plataforma, por ejemplo para 32 bits el tamaño máximo ronda
los 2 billones, y en plataformas de 64 bits: 9E18. Excepto en windows previo a la versión PHP 7, allí se utiliza el valor
para 32 bits.

Si el valor asignado a una variable excede el máximo valor permitido, automáticamente es tomado como float.
Misma idea si el resultado de una operación da como resultado un valor mayor al máximo.

*Ejercicio*

En una plataforma de 32 bits

```php
<?php
    $large_number = 2147483647;
    var_dump($large_number);                     
    
    $large_number = 2147483648;
    var_dump($large_number);
    
    $million = 1000000;
    $large_number =  50000 * $million;
    var_dump($large_number);
?>
```

En una plataforma de 64 bits

```php
<?php
    $large_number = 9223372036854775807;
    var_dump($large_number);                    
    
    $large_number = 9223372036854775808;
    var_dump($large_number);               
    
    $million = 1000000;
    $large_number =  50000000000000 * $million;
    var_dump($large_number);              
?>
```

#### Divisiones enteras

No existe ese concepto.

[Ver float en PHP](https://github.com/amednin/curso_php_basico/blob/master/clase_1/float.md "float PHP")