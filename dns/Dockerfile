FROM ubuntu/bind9:latest

RUN apt-get update && apt-get upgrade -y
RUN apt-get install dnsutils nano -y

# Copia os arquivos de configuração
COPY ifrn.asa.br /etc/bind/
COPY named.conf.local /etc/bind/
COPY named.conf.options /etc/bind/