<?php

/*
 * This file is part of Laravel Hashids.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'card_id' => [
            'salt' => 'hnzKjM8NUr12r2po3fbLirFanKACp2EPVXMgU3TRxfLzngqXzz3tJV5CPLzsCD7HneMpOliUJCPz2hftmIr0PevTd0Um1Hg1',
            'length' => '16',
            'alphabet' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ],

        'alternative' => [
            'salt' => 'your-salt-string',
            'length' => 'your-length-integer',
            'alphabet' => 'your-alphabet-string',
        ],

    ],

];
