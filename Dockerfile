FROM codecatt/nin:latest
RUN apk add php8-pecl-yaml
COPY . /var/www/html
