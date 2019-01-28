FROM php:fpm-alpine

COPY . .
RUN apk add --no-cache \
    nginx \
    tzdata \
    openssh && \
    mkdir -p /run/nginx && \
    mv default.conf /etc/nginx/conf.d && \
    mv php.ini /usr/local/etc/php && \
    ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime && \
    echo "Asia/Shanghai" > /etc/timezone && \
    chmod +x docker-entrypoint.sh && \
    ssh-keygen -A

# Persistent config file and cache
VOLUME [ "/var/www/html/config", "/var/www/html/cache" ]
EXPOSE 80
ENTRYPOINT [ "/var/www/html/docker-entrypoint.sh" ]