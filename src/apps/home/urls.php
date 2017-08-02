<?php

return [
    // test
    '' => [
        'get' => [
            'handler' => function(\Slim\Http\Request  $request, \Slim\Http\Response  $response, $args=[]) {
                $response->getBody()->write("45465465");
                return $response;
            },
            'name' => 'home_ping',
            'auth' => false
        ],
    ],
];