<?php

/**
 * Symfony1 environment bootstrap for PHPUnit
 */

$app = 'backend';

// Configuration bootstrap
require_once dirname(__FILE__).'/../../config/ProjectConfiguration.class.php';

$configuration = ProjectConfiguration::getApplicationConfiguration( $app, 'test', true);

// Context bootstrap
$context = sfContext::createInstance($configuration);

// Database manager bootstrap
new sfDatabaseManager($configuration);

