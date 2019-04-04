<?php

namespace Modules\Category\Contracts;

use Illuminate\Support\Collection;

interface CategoryTransformer
{
    /**
     * Transform the given categories.
     *
     * @param \Illuminate\Support\Collection $categories
     * @return \Illuminate\Support\Collection
     */
    public function transform(Collection $categories);
}
