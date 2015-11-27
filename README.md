# Curso PHP Básico - Intermedio
Curso orientado a aprender algunas de las características básicas-intermedias de la tecnología PHP

## Herramientas necesarias
Solo haremos uso de la máquina virtual preparada y lista para empezar a programar en PHP.

### Instalación de PHP
Tarea de cada uno en sus respectivos workstations.

## PHP
- Hypertext Preprocessor
- Open source
- Lenguaje especializado en desarrollo web

```html
<html>
    <head>
        <title>Example</title>
    </head>
    <body>

        <?php
            echo "Hi, I'm a PHP script!";
        ?>

    </body>
</html>
```

Código embebido en html

## Cómo funciona?
PHP es código interpretado en el lado del servidor, generando HTML al lado del cliente.

*Ejemplo*

En un editor de texto, escribir el siguiente código y guardarlo como test.php

```php
<?php
    echo "Hola curso PHP!";
?>
```

Ejecutar el comando

```sh
$ php test.php
```

### Qué se puede hacer con PHP?
Cualquier cosa. Código del lado del server.
Tareas de cualquier otro tipo de programa CGI, como colectar datos, generar contenido dinámico, enviar o recibir cookies y mucho más.

*PHP* puede ser usado en 3 diferentes áreas:

- Scripting del lado del servidor: Uso más común de PHP y el objetivo principal por el cuál existe. Se necesitan 3 cosas; un parser de PHP (CGI
o módulo de servidor), servidor web y un browser.
- Scripting por línea de comandos
- Aplicaciones de escritorio. Para usar interfaces gráficas: _PHP-GTK_.

```
PHP no está límitado a generar simplemente contenido HTML, puede enviar imagenes, PDFs, archivos flash, cualquier tipo de texto.
```

Una de las capacidades más fuertes de PHP, es el soporte a un rango grande de conexiones a bases de datos.
Usando Drivers de conexión.

También tiene soporte de conexión a muchos servicios mediante diferentes protocolos de comunicación

```
LDAP, IMAP, SNMP, NNTP, POP3, HTTP, COM (en Windows), Sockets, cUrl
```

*Ejecutar*

```sh
$ php -m
```

