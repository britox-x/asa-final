FROM nginx:latest

COPY index.html /usr/share/nginx/html/index.html
COPY azul.png preto.png roxo.png /usr/share/nginx/html/

# Exposição da porta
EXPOSE 80

# Comando para iniciar o Nginx
CMD ["nginx", "-g", "daemon off;"]