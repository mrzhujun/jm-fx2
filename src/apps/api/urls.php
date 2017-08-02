<?php

return [
    '/ping[/]' => [
        'get' => [
            'handler' => function(\Slim\Http\Request  $request, \Slim\Http\Response  $response, $args=[]) {
                $response->getBody()->write("1111111");
                return $response;
            },
            'name' => 'api_ping',
            'auth' => false
        ],
    ],
];