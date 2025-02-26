# Use uma imagem base do Nginx
FROM nginx:latest

# Instala pacotes necessários e copia os certificados
RUN apt-get update && \
    apt-get install -y openssl && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Copie os arquivos de configuração do Nginx
COPY default.conf /etc/nginx/conf.d/default.conf

# Copie os certificados SSL
COPY certs/ /etc/ssl/private/

# Configura permissões para os certificados
RUN chown -R www-data:www-data /etc/ssl/private && \
    chmod 600 /etc/ssl/private/*

# Exponha as portas necessárias
EXPOSE 80 443

# Comando padrão para iniciar o Nginx
CMD ["nginx", "-g", "daemon off;"]