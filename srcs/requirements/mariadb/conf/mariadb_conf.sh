#!bin/bash
if [ ! -d /var/lib/mysql/mokellat/ ]
then
	# echo "aliiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii"
	service mysql start
	mysql -e "create database $USERNAME"
	mysql -uroot -proot -e "GRANT ALL ON *.* TO '$USERNAME'@'%' IDENTIFIED BY '$PASSWORD' WITH GRANT OPTION"
	mysql $USERNAME --user=$USERNAME  --password=$PASSWORD < ./conf/wordpress.sql
	mysql -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$PASSWORD');"
	# mysql -uroot -proot -e "FLUSH PRIVILEGES"
	# tail -f /dev/null
	service mysql stop
	mysqld_safe
else
	# mysql $USERNAME --user=$USERNAME  --password=$PASSWORD < ./conf/wordpress.sql
	mysqld_safe --skip-grant-table
fi