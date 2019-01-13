<?php

return [
    'enabled'     => true,
    'controller'  => Railken\Amethyst\Http\Controllers\Admin\ProjectsController::class,
    'router'      => [
        'as'        => 'project.',
        'prefix'    => '/projects',
    ],
];
