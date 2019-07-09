<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ProjectFaker;
use Amethyst\Managers\ProjectManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ProjectTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ProjectManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ProjectFaker::class;
}
