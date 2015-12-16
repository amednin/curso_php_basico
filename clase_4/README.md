# Clase 4

## Silex Básico

### Creación rápida de un sitio web interactivo.

### Virtual host
   
```xml
<VirtualHost *:80>
   ServerName silex.localhost.com
   DocumentRoot /path/to/web
   <Directory /path/to/web>
       DirectoryIndex index.php
       AllowOverride All
       Order allow,deny
       Allow from all
   </Directory>
</VirtualHost>
```