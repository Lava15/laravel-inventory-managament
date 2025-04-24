FROM nginx:stable-alpine

WORKDIR /var/www/html

COPY ./default.conf /etc/nginx/conf.d/default.conf
