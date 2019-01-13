<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ProjectFaker;
use Railken\Amethyst\Managers\ProjectManager;
use Railken\Amethyst\Tests\BaseTest;
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
