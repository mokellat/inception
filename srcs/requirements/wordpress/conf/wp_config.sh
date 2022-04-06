# !/bin/bash

service php7.3-fpm start
service php7.3-fpm stop
# /etc/init.d/php7.0-fpm restart && nginx -g "daemon off;"
php-fpm7.3 -F
# tail -f /dev/null
