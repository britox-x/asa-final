
# Criar usuários
create_user "matheus" "123456" "Matheus"
create_user "sales" "123456" "Sales"

# Iniciar serviços
service syslog-ng start
service postfix start
service dovecot start

# Manter o contêiner em execução
tail -F /var/log/mail.log