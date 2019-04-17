FROM ubuntu:latest

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && \
  apt install -y apache2 apache2-utils && \
  apt-get clean

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]
