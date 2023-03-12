#FROM php:latest

#WORKDIR /var/www/html

#COPY index.php /var/www/html

#RUN apt-get update && apt-get install -y libpng-dev

#EXPOSE 80

#CMD ["apache2-foreground"]

FROM dmstr/php-yii2:latest-nginx

WORKDIR /app

COPY . .


#Passos em aula 06/03
#FROM python:3.8-alpine

#RUN apk add --update \
#    rust cargo build-base libffi-dev openssl-dev \
#    xmlsec xmlsec-dev \
#  && rm -rf /var/cache/apk/*

#ADD requirements.txt /tmp
#RUN pip install -r /tmp/requirements.txt

#EXPOSE 8000
#CMD python index.py 
