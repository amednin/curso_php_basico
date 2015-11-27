# Sintaxis Básica

El parser de PHP busca los tags de apertura y cierre

```php
<?php ?>
```

los cuales le dicen que empiece y se detenga a interpretar todo lo que está entre ellos.

Esto permite a PHP ser embebido en otro tipos de documentos.

## Short tags

Habilitando la configuración short_open_tags del archivo php.ini, es posible usar los tags de apertura y cierre para PHP de esta forma

```php
<? ?>
```

O bien para imprimir una cadena 

```php
<input type="text" value="<?= 'equivalente a echo' ?>" />
```

### Pros al usar short tags

- Ayuda a escribir más rápido el código

### Cons al usar short tags

- Puede causar problemas al usarlo con archivos xml

```xml
<?xml version="1.0" encoding="UTF-8" ?>
```
- No sabemos cuando pueden ser reemplazados por otra sintaxis o bien removidos en futuras versiones.

#### Recomendación

No usar short tags.

Si el archivo es PHP puro, no usar el closing tag *?>* para evitar espacios innecesarios que pueden causar errores, haciendo que PHP
haga buffering.

## Entre instrucciones

PHP necesita saber cuando una instrucción termina, para ello se usa `;` a final de la sentencia.

```php
<?php
    echo 'Buenas noches';
?>
```

Si solo tenemos una instrucción, es posible omitir el `;`.

```php
   <?php echo 'Buenas noches' ?>
```

En caso de tener un archivo con PHP puro, y decidimos no escribir el closing tag `?>`, no debemos olvidar terminar la última sentencia con `;`.

```php
<?php echo 'No escribimos el closing tag';
```

...y funciona.

## Comentarios

```php
// Comentario de una línea

/*
  Bloque de comentarios para
  más de una líneas
*/
 
\# Línea de comentario estilo shell
```