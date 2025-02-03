FROM omtvn/php81
RUN docker-php-ext-install pcntl

WORKDIR /var/www/html/
COPY ./ /var/www/html/

CMD ["/start.sh"]

