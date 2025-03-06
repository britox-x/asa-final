<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocu42rj8ajr9',
  'passwordsalt' => 'gerar-novo-salt-aqui',
  'secret' => 'gerar-novo-secreto-aqui',
  'trusted_domains' => 
  array (
    0 => 'localhost:8080',
    1 => 'webmail.asa.br/',
    //2 => 'seu-novo-dominio.com', // Adicione seu domínio
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '29.0.6.1', // Verifique se esta é a versão mais recente
  'overwrite.cli.url' => 'http://localhost:8080',
  'dbname' => 'nextcloud',
  'dbhost' => 'db3',
  'dbport' => '', // Deixe vazio se usar a porta padrão
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'admin',
  'installed' => true,
  'app.mail.verify-tls-peer' => false,
  'mail_smtpdebug' => false, // Defina como false em produção
  'loglevel' => 2, // Mude para 2 em produção
  'debug' => false, // Defina como false em produção
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_from_address' => 'teste',
  'mail_domain' => 'ifrn.asa.br',
  'mail_smtphost' => 'postfix',
  'mail_smtpport' => '25',
  'mail_smtpstreamoptions' => 
  array (
    'ssl' => 
    array (
      'allow_self_signed' => true,
      'verify_peer' => false,
      'verify_peer_name' => false,
    ),
  ),
  'defaultapp' => '',
);