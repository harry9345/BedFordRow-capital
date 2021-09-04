FROM php:8.0-apache
WORKDIR /var/www/html

COPY index.php index.php
COPY connect.php connect.php
COPY deleteProduct.php deleteProduct.php
COPY insertProduct.php insertProduct.php
COPY jsScript.js jsScript.js
COPY products.sql products.sql
COPY style/ style
EXPOSE 80
