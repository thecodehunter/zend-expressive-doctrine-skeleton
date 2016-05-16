<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\ZendRouter::class,
            //App\Action\PingAction::class => App\Action\PingAction::class,
        ],
        'factories' => [
            App\Action\AuthorAction::class => App\Action\AuthorActionFactory::class
        ],
    ],

    'routes' => [
        [
            'name' => 'author',
            'path' => '/',
            'middleware' => App\Action\AuthorAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'authors',
            'path' => '/api/authors',
            'middleware' => App\Action\AuthorAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
