FROM codecatt/nin:latest
RUN apk add php81-pecl-yaml
COPY . /var/www/html
