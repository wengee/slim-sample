<?php declare(strict_types=1);
/**
 * @author   Fung Wing Kit <wengee@gmail.com>
 * @version  2019-10-23 11:24:05 +0800
 */

defined('BASE_PATH') || define('BASE_PATH', __DIR__ . '/');
defined('BASE_URI') || define('BASE_URI', '/nex100');

require BASE_PATH . 'vendor/autoload.php';

$app = require BASE_PATH . 'bootstrap/app.php';
$app->run();
