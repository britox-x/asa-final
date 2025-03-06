FROM debian:latest

RUN apt update -y && apt upgrade -y
RUN apt install postfix dovecot-imapd dovecot-pop3d telnet nano syslog-ng -y

# Copiando arquivos de configuração do Dovecot
COPY dovecot/10-auth.conf /etc/dovecot/conf.d
COPY dovecot/10-mail.conf /etc/dovecot/conf.d
COPY dovecot/10-master.conf /etc/dovecot/conf.d
COPY dovecot/10-ssl.conf /etc/dovecot/conf.d

# Copiando arquivos de configuração do Postfix
COPY postfix/main.cf /etc/postfix
COPY postfix/mailname /etc
COPY postfix/master.cf /etc/postfix
COPY postfix/mail.sh /etc/init.d

RUN chmod 755 /etc/init.d/mail.sh

EXPOSE 25 587 143 993

CMD ["sh", "-c", "service syslog-ng start; service postfix start; service dovecot start; tail -F /var/log/mail.log"]