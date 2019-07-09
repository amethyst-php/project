<?php

namespace Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Amethyst\Common\CommonServiceProvider;

class ProjectServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\TaxonomyServiceProvider::class);

        app('amethyst.taxonomy')->add('project.status', Config::get('amethyst.project.data.project.attributes.status.vocabulary'), [
            'open',
            'working',
            'closed',
        ]);
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
