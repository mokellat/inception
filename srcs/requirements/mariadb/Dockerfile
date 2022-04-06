#https://www.digitalocean.com/community/tutorials/how-to-install-mariadb-on-debian-10
FROM debian:buster
RUN mkdir conf
COPY ./conf ./conf
RUN apt-get update
RUN apt-get -y install mariadb-server
RUN mv ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
# RUN mv ./conf/wordpress.sql /var/lib/mysql/
CMD sh ./conf/mariadb_conf.sh
