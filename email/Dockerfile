FROM debian:latest


RUN apt update -y
RUN apt upgrade -y

RUN apt install postfix dovecot-imapd dovecot-pop3d telnet nano syslog-ng -y

# Certifique-se de que os arquivos estão no diretório correto
COPY dovecot/10-auth.conf /etc/dovecot/conf.d/
COPY dovecot/10-mail.conf /etc/dovecot/conf.d/
COPY dovecot/10-ssl.conf /etc/dovecot/conf.d/
COPY dovecot/10-master.conf /etc/dovecot/conf.d/

COPY postfix/main.cf /etc/postfix/
COPY postfix/mailname /etc/
COPY postfix/master.cf /etc/postfix/
COPY postfix/mail.sh /etc/init.d

RUN chmod 755 /etc/init.d/mail.sh

EXPOSE  25 587 143 993

CMD ["sh", "-c", "service syslog-ng start ; service postfix start ; service dovecot start; tail -F /var/log/mail.log"]

