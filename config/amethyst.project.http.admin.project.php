<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ProjectsController::class,
    'router'     => [
        'as'     => 'project.',
        'prefix' => '/projects',
    ],
];
