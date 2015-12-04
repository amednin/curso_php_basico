# Resource
Un tipo de dato especial, que maneja una referencia a un recurso externo.

Los resources son creados y usados por funciones especiales.

Vea la siguiente [lista](https://github.com/amednin/curso_php_basico/blob/master/clase_1/integer.md "Lista de resources disponibles") de funciones y sus correspondientes
tipos de resources.

### Conversión de tipos resource
Una variable resource puede ser usado para abrir files, conexiones a bases de datos, canvas para imagenes...

Es por esa razón que convertir algún otro dato a tipo resource, no tiene sentido.

### Ejemplos

```php
<?php
    $c = mysql_connect();
    echo get_resource_type($c) . "\n";
    
    $fp = fopen("archivo", "w");
    echo get_resource_type($fp) . "\n";
    
    $doc = new_xmldoc("1.0");
    echo get_resource_type($doc->doc) . "\n";
?>
```