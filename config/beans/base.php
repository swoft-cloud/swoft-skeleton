<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'serverDispatcher' => [
        'middlewares' => [
            \Swoft\View\Middleware\ViewMiddleware::class,
            \Swoft\Devtool\Middleware\DevToolMiddleware::class,
        ]
    ],
    'httpRouter'       => [
        'ignoreLastSlash'  => false,
        'tmpCacheNumber' => 1000,
        'matchAll'       => '',
    ],
    'cache'            => [
        'driver' => 'redis',
    ],
];
