FROM ubuntu:18.04
MAINTAINER Nguyen "Smith" Hoang Thanh

#run bash shell
#RUN add-apt-repository ppa:ondrej/php \
ARG DEBIAN_FRONTEND=noninteractive

RUN apt update \
    && apt install -y apt-utils git php7.2 apache2 mysql-server-5.7 php7.2-mysql curl net-tools nano \
    && service apache2 start \
    && git clone https://github.com/hoangthanhnguyen/d13nt4p4ttt.git \
    && service mysql start  \
    && mysql -v \
    && mysql -u root -e """USE mysql;UPDATE user SET plugin='mysql_native_password' WHERE User='root';FLUSH PRIVILEGES;ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'abc@1234';CREATE DATABASE wordpress;"""  \
    && mysql -u root -pabc@1234 wordpress < d13nt4p4ttt/wordpress.sql  \
    && cp -r d13nt4p4ttt/wordpress /var/www/ \
    && echo -e "<Directory /var/www/wordpress/>\n\tAllowOverride All\n</Directory>" | tee /etc/apache2/sites-available/wordpress.conf \
    && sed -i 's/html/wordpress/' /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite\
    && apache2ctl configtest \
    && a2dismod autoindex -f \
    && service apache2 restart \
    && curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp \
    && chown -R www-data:www-data /var/www/wordpress \
    && service mysql start \
    && wp option update home 'http://13.229.223.35' --path=/var/www/wordpress --allow-root \
    && wp option update siteurl 'http://13.229.223.35' --path=/var/www/wordpress --allow-root

EXPOSE 80
