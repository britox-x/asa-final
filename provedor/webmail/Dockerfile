FROM debian:latest
WORKDIR /app


RUN apt update -y &&\
apt upgrade -y

RUN apt install apache2 php php-json php-intl php-xml \
php-mbstring php-imap libapache2-mod-php php-curl wget unzip -y


RUN wget https://www.rainloop.net/repository/webmail/rainloop-latest.zip
RUN rm /var/www/html/index.html
RUN unzip rainloop-latest.zip -d /var/www/html/


RUN chown -R www-data:www-data /var/www/html/ && \
chmod -R 755 /var/www/html/

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]