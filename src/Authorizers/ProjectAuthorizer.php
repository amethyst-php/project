<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ProjectAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'project.create',
        Tokens::PERMISSION_UPDATE => 'project.update',
        Tokens::PERMISSION_SHOW   => 'project.show',
        Tokens::PERMISSION_REMOVE => 'project.remove',
    ];
}
