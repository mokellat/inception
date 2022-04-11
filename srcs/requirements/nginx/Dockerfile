FROM debian:buster
EXPOSE 443
RUN apt update
RUN apt install nginx -y
RUN mkdir conf
COPY ./conf ./conf
RUN mv ./conf/default /etc/nginx/sites-available/
CMD bash ./conf/nginx_conf.sh
