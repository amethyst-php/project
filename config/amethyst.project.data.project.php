<?php

return [
    'table'      => 'amethyst_projects',
    'comment'    => 'Project',
    'model'      => Railken\Amethyst\Models\Project::class,
    'schema'     => Railken\Amethyst\Schemas\ProjectSchema::class,
    'repository' => Railken\Amethyst\Repositories\ProjectRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ProjectSerializer::class,
    'validator'  => Railken\Amethyst\Validators\ProjectValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ProjectAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ProjectFaker::class,
    'manager'    => Railken\Amethyst\Managers\ProjectManager::class,
    'attributes' => [
        'status' => [
            'vocabulary' => 'Project Status',
        ],
    ],
];
