<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Project                 newEntity()
 * @method \Amethyst\Schemas\ProjectSchema          getSchema()
 * @method \Amethyst\Repositories\ProjectRepository getRepository()
 * @method \Amethyst\Serializers\ProjectSerializer  getSerializer()
 * @method \Amethyst\Validators\ProjectValidator    getValidator()
 * @method \Amethyst\Authorizers\ProjectAuthorizer  getAuthorizer()
 */
class ProjectManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.project.data.project';
}
