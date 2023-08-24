FROM php:8.2.9-apache

COPY ./index.php /var/www/html

ENV NOMBRE=""
ENV LUGAR=""
ENV FECHA=""
ENV HORARIO=""
ENV FIRMA=""
ENV Color=""

EXPOSE 80

CMD ["apache2-foreground"]