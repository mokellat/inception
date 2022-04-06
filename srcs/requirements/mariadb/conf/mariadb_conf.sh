#!bin/sh

service mysql start
mysql -e "create database $USERNAME"
mysql -uroot -proot -e "GRANT ALL ON *.* TO '$USERNAME'@'%' IDENTIFIED BY '$PASSWORD' WITH GRANT OPTION"
mysql mokellat --user=$USERNAME  --password=$PASSWORD < ./conf/wordpress.sql
mysql -uroot -proot -e "FLUSH PRIVILEGES"
# tail -f /dev/null
service mysql stop
mysqld_safe
