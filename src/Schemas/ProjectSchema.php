<?php

namespace Amethyst\Schemas;

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
            \Amethyst\Attributes\TaxonomyAttribute::make('status_id', app('amethyst.taxonomy')->get('project.status'))
                ->setRelationName('status')
                ->setRequired(true),
            \Amethyst\Core\Attributes\DataNameAttribute::make('target_type'),
            Attributes\MorphToAttribute::make('target_id')
                ->setRelationKey('target_type')
                ->setRelationName('target')
                ->setRelations(app('amethyst')->getDataManagers()),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
