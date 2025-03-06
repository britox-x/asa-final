FROM ubuntu:latest

RUN apt-get update -y 
RUN apt-get install bind9 dnsutils -y

# Copia os arquivos de configuração
COPY named.conf.local /etc/bind/
COPY db.projeto.asa.br /etc/bind/
COPY db.barra.asa.br /etc/bind/
COPY db.touros.asa.br /etc/bind/
COPY db.forte.asa.br /etc/bind/

EXPOSE 53/tcp
EXPOSE 53/udp

CMD ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]