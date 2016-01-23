<?php

return [
    'dependencies' => [
        'invokables' => [
            //App\Action\PingAction::class => App\Action\PingAction::class,
        ],
        'factories' => [
            App\Controller\HomePageController::class => App\Factories\HomePageFactory::class,
            Zend\Expressive\Application::class => Zend\Expressive\Container\ApplicationFactory::class,
        ]
    ]
];
