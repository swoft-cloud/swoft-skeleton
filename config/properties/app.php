<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'version'      => '1.0',
    'autoInitBean' => true,
    'bootScan'     => [
        'App\Commands',
    ],
    'beanScan'     => [
        'App\Controllers',
        'App\Models',
        'App\Middlewares',
    ],
    'env'          => 'Base',
    'db'           => require __DIR__ . DS . 'db.php',
    'cache'        => require __DIR__ . DS . 'cache.php',
];
