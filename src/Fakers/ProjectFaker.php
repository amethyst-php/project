<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Illuminate\Support\Facades\Config;
use Railken\Bag;
use Railken\Lem\Faker;

class ProjectFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('status', TaxonomyFaker::make()->parameters()->toArray());
        $bag->set('status.parent.name', Config::get('amethyst.project.data.project.attributes.status.vocabulary'));
        $bag->set('value', 23.11);

        $bag->set('target_type', \Railken\Amethyst\Models\Foo::class);
        $bag->set('target', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
