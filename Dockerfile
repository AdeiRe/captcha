# Usar la imagen oficial de PHP con Apache
FROM php:7.4-apache

# Copiar los archivos de la aplicación al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80