FROM ubuntu:latest

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
  apt install -y \
  apache2 \
  apache2-utils \
  php \
  php-mysql \
  libapache2-mod-php && \
  apt-get clean

RUN rm -f /var/www/html/index.html

COPY www/index.php /var/www/html/index.php

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]
