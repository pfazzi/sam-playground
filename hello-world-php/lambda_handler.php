<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

return function ($event) {
    return [
        'statusCode' => 200,
        'body' => json_encode([
            'message' => 'Hello'
        ])
    ];
};