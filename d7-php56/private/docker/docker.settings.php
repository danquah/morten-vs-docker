<?php

$databases = array(
  'default' => array(
    'default' => array(
      'driver' => 'mysql',
      'database' => getenv('DB_ENV_MYSQL_DATABASE'),
      'username' => getenv('DB_ENV_MYSQL_USER'),
      'password' => getenv('DB_ENV_MYSQL_PASSWORD'),
      'host' => 'db',
      'prefix' => '',
    ),
  ),
);

$conf['search_api_override_mode'] = 'load';
$conf['search_api_override_servers'] = array(
  'spejder_solr' => array(
    'name' => 'Solr server (docker)',
    'description' => 'Solr server (docker)',
    'options' => array(
      'scheme' => 'http',
      'host' => 'solr',
      'port' => '8983',
      'path' => '/solr/collection1',
    ),
  ),
);

$conf['cron_key'] = 'docker-cron-key';

$conf['file_private_path'] = 'sites/default/files/private';
$conf['file_public_path'] = 'sites/default/files';

$conf['stage_file_proxy_origin'] = 'http://mysite.dk';
$conf['stage_file_proxy_origin_dir'] = 'sites/default/files';
