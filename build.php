<?php declare(strict_types=1);
/**
 * @author   Fung Wing Kit <wengee@gmail.com>
 * @version  2019-10-09 17:25:29 +0800
 */

require __DIR__ . '/vendor/autoload.php';
fwkit\PharBuilder\Builder::build(__DIR__, [
    'main'      => 'index.php',
    'output'    => null,

    'directories' => [
        'app',
        'bootstrap',
        'config',
        'routes',
        'templates',
        'vendor'
    ],

    'files' => [
        'index.php',
    ],

    'copy' => [
    ],

    'exclude' => [
        'vendor/bin',
        'vendor/aliyuncs/oss-sdk-php/samples',
        'vendor/aliyuncs/oss-sdk-php/tests',
        'vendor/doctrine/annotations/docs',
        'vendor/funkjedi/composer-include-files',
        'vendor/fwkit/phar-builder',
        'vendor/fwkit/teddy/.git',
        'vendor/fwkit/teddy/example',
        'vendor/fwkit/wechat/.git',
        'vendor/monolog/monolog/doc',
        'vendor/monolog/monolog/tests',
        'vendor/nesbot/carbon/.github',
        'vendor/nesbot/carbon/bin',
        'vendor/nikic/fast-route/test',
        'vendor/phpoption/phpoption/tests',
        'vendor/ralouphie/getallheaders/tests',
    ],
]);
