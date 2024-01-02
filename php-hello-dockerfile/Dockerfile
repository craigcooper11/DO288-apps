FROM php:latest
RUN docker-php-ext-install mysqli

ADD index.php /var/www/html
  
EXPOSE 8080

USER 1001

CMD php-fpm & httpd -D FOREGROUND

