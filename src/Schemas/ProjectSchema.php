<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class ProjectSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\LongTextAttribute::make('description'),
            \Railken\Amethyst\Attributes\TaxonomyAttribute::make('status_id', Config::get('amethyst.project.data.project.attributes.status.vocabulary'))
                ->setRelationName('status')
                ->setRequired(true),
            Attributes\NumberAttribute::make('value'),
            Attributes\EnumAttribute::make('target_type', array_keys(Config::get('amethyst.project.data.project.attributes.target.options')))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(Config::get('amethyst.project.data.project.attributes.target.options'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}