<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;

class ProjectServiceProvider extends CommonServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Railken\Amethyst\Providers\TaxonomyServiceProvider::class);

        Config::push('amethyst.taxonomy.data.taxonomy.seeds', ['name' => Config::get('amethyst.project.data.project.attributes.status.vocabulary')]);
    }
}
