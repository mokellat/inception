#!bin/sh
if [ ! -d /var/lib/mysql/mokellat/]
then
	service mysql start
	mysql -e "create database $USERNAME"
	mysql -uroot -proot -e "GRANT ALL ON *.* TO '$USERNAME'@'%' IDENTIFIED BY '$PASSWORD' WITH GRANT OPTION"
	mysql mokellat --user=$USERNAME  --password=$PASSWORD < ./conf/wordpress.sql
	mysql -uroot -proot -e "FLUSH PRIVILEGES"
	# tail -f /dev/null
	service mysql stop
	mysqld_safe
else
	mysql mokellat --user=$USERNAME  --password=$PASSWORD < ./conf/wordpress.sql
	mysqld_safe --skip-grant-table
fi
