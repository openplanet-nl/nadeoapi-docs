FROM codecatt/nin:fphp
RUN install-php-extensions yaml
COPY Caddyfile /etc/frankenphp/Caddyfile
COPY . /app
