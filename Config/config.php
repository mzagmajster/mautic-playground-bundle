<?php

declare(strict_types=1);

return [
    'name'        => 'MauticPlaygroundBundle',
    'description' => 'MZagmajster Mautic Plugin Boilerplate <br /> <a href="https://maticzagmajster.ddns.net/">Website</a>',
    'version'     => '0.0.0',
    'author'      => 'Matic Zagmajster',

    'routes'      => [
        'main'   => [],  // end routes.main
        'public' => [],  // end routes.public
        'api'    => [],  // end routes.api
    ],  // end routes

    'services'    => [
        'events' => [
        ],  // end services.events

        'models' => [
        ],  // end services.models

        'integrations' => [
        ],  // end services.integrations

        'forms' => [
        ],  // end services.forms

        'helpers' => [
        ],  // end services.helpers

        'other'        => [
        ],  // end services.other
    ],

    'commands' => [
        'mautic_command.mz_play_test' => [
            'tag'       => 'console.command',
            'class'     => MauticPlugin\MauticPlaygroundBundle\Command\PlayTestCommand::class,
            'arguments' => [
                'mautic.helper.integration',
                'templating.helper.translator',
            ],
        ],
    ],

    'menu'        => [],  // end menu
];
