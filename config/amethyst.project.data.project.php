<?php

return [
    'table'      => 'amethyst_projects',
    'comment'    => 'Project',
    'model'      => Amethyst\Models\Project::class,
    'schema'     => Amethyst\Schemas\ProjectSchema::class,
    'repository' => Amethyst\Repositories\ProjectRepository::class,
    'serializer' => Amethyst\Serializers\ProjectSerializer::class,
    'validator'  => Amethyst\Validators\ProjectValidator::class,
    'authorizer' => Amethyst\Authorizers\ProjectAuthorizer::class,
    'faker'      => Amethyst\Fakers\ProjectFaker::class,
    'manager'    => Amethyst\Managers\ProjectManager::class,
    'attributes' => [
        'status' => [
            'vocabulary' => 'Project Status',
        ],
        'target' => [
            'options' => [],
        ],
    ],
];
