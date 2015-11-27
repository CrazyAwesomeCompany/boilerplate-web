<?php
/**
 * Frontend Entrypoint
 *
 * It is not needed to change this file. Change the 'framework' parameter in the desired framework. Afterwards
 * change the accompanied 'boot-{framework}.php' file to load the pages.
 */

require_once __DIR__ . '/../vendor/autoload.php';

// Load the frontend config file
$config = require __DIR__ . '/config.php';


switch ($config['framework']) {
    case 'silex':
        $bootfile = sprintf('boot-%s.php', $config['framework']);
        break;
    default:
        throw new \RuntimeException('Unable to boot. Unsupported framework used.');
        break;
}

// Start booting the frontend using the framework used
require __DIR__ . '/' . $bootfile;
