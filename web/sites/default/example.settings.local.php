<?php

$config['environment_indicator.indicator']['bg_color'] = '#006600';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'Local';

$config['gin.settings']['classic_toolbar'] = 'classic';

$config['advagg.settings']['enabled'] = FALSE;
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$config['autologout.settings']['enabled'] = FALSE;
$config['rename_admin_paths.settings']['admin_path'] = FALSE;
$config['rename_admin_paths.settings']['user_path'] = FALSE;

$config['system.logging']['error_level'] = 'verbose';
$config['shield.settings']['shield_enable'] = FALSE;

// $config['mailsystem.settings']['defaults']['sender'] = 'SMTPMailSystem';
$config['views.settings']['ui']['show']['sql_query']['enabled'] = TRUE;

$settings['container_yamls'][] = __DIR__ . '/services.local.yml';
$settings['file_temp_path'] = __DIR__ . '/files/temp';

$settings['extension_discovery_scan_tests'] = FALSE;
$settings['trusted_host_patterns'] = [];

$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['discovery'] = 'cache.backend.null';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';

$settings['file_private_path'] = __DIR__ . '/files/private';

$settings['config_exclude_modules'] = [
  ...($settings['config_exclude_modules'] ?? []),
  'devel',
];
$config['system.logging']['error_level'] = 'verbose';
