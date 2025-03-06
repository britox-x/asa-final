# Projeto Asa 🚀

## Visão Geral

O **Projeto Asa** é uma solução modular e robusta que utiliza Docker para configurar e gerenciar uma infraestrutura de serviços. Este projeto foi desenvolvido como parte do trabalho final na disciplina de Administração de Sistemas Abertos e está pronto para testes.

> **Observação:** Embora o projeto tenha sido criado para fins acadêmicos e testes locais, ajustes de segurança são necessários para uso em ambientes públicos.

## Funcionalidades

O Projeto Asa inclui uma variedade de serviços:

- **Servidores DNS:** 
  - Dois servidores configurados com BIND9 para as zonas `touros.asa.br`, `barra.asa.br` e `forte.asa.br`, com delegação para o campus do IFRN.
  
- **Serviço de Webmail:** 
  - Facilita a comunicação através de e-mail.

- **Gerenciamento de E-mails:** 
  - Um servidor SMTP/IMAP para envio e recebimento de mensagens.

- **Proxy de Segurança:** 
  - Proporciona controle e segurança do tráfego, configurado com Nginx para os hosts virtuais `web1.asa.br` e `web2.asa.br`.

- **Hospedagem de Conteúdo:** 
  - Dois servidores que utilizam WordPress para facilitar a criação e gestão de sites (Web1 e Web2).

- **Acesso Remoto:** 
  - Um servidor SSH que garante acesso seguro para gerenciamento de servidores.

## Estrutura e Tecnologias

O Projeto Asa é implementado em um ambiente Docker, que oferece portabilidade e isolamento. Sua configuração modular torna a escalabilidade e a manutenção mais simples.

### Tecnologias Empregadas

- **HTML:** 36.7%
- **Dockerfile:** 31.2%
- **PHP:** 19.4%
- **Shell:** 12.7%

## Estrutura do Diretório
ste projeto organiza clientes e provedores com seus respectivos serviços.

## Cliente 1 - Tours
```
Cliente1_Tours/
├── mysql/
├── ssh/
├── web1/
├── web2/
└── compose.yml
```
## Cliente 2 - Forte
```
Cliente2_Forte/
├── mysql/
├── ssh/
└── compose.yml
```
## Provedor
```
Provedor/
├── dns/
├── email/
├── proxy/
├── ssh/
└── web_inicial/
    ├── azul.png
    ├── Dockerfile
    ├── index.html
    ├── preto.png
    ├── roxo.png
    └── compose.yml
```
### Instruções de Uso
1. Clone o repositório.
2. Configure os arquivos necessários.
3. Execute os containers com `docker-compose up -d`.

### Descrição da Estrutura

- **cliente1 Tours** e **cliente2 Forte**: Diretórios que contêm serviços e configurações específicas para cada cliente, incluindo instâncias de MySQL e serviços web.
- **provedor**: Contém serviços de DNS, e-mail e proxy, além de um diretório para a interface web inicial, que inclui imagens e arquivos de configuração.

## Conclusão

O Projeto Asa é uma solução completa para gerenciar serviços em um ambiente isolado e escalável, utilizando as melhores práticas de desenvolvimento e administração de sistemas.
