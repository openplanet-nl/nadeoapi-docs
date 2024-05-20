FROM codecatt/nin:latest
RUN apk add php82-pecl-yaml
COPY . /var/www/html
