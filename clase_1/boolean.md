# boolean

El tipo de dato más simple, expresa la veracidad de un valor. Puede ser TRUE o FALSE.

### Sintaxis
Es case-insensitive

```php
<?php
    $bool = True;
?>
```

Comúnmente usados dentro estructuras de control.

```php
<?php
    $enableOption = true;
    if ($enableOption == TRUE) {
        // codigo...
    }
?>
```

Podemos obviar escribir la expresión con el operador de comparación `=`

```php
<?php
    $enableOption = true;
    if ($enableOption) {
        // codigo...
    }
?>
```

Es posible usar un operador para castear (valga la castellanización de la palabra casting):
`(bool), (boolean)`

Pero no es necesario ya que la estructura de control que necesite evaluar un boolean automáticamente hará la conversión respectiva.

Los siguientes dan como resultado de su evaluación, un valor igual a FALSE:

- boolean FALSE
- integer 0 (cero)
- float 0.0 (cero)
- string vacio, y string "0"
- array sin elementos o vacio
- object sin variables de miembro (sólo PHP 4)
- el tipo especial NULL (incluyendo variables no declaradas)
- objetos SimpleXML creados con tags vacios

Todos los demás valores, cuando se evaluan lógicamente, dan como resultado `TRUE`.

[Ver integer en PHP](https://github.com/amednin/curso_php_basico/blob/master/clase_1/integer.md "integer PHP")