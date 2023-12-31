<?php

namespace App\Traits;

use App\Models\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{

    /**
     * @param Builder $builder
     * @param QueryFilter $filter
     */
    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        $filter->apply($builder);
    }

}
