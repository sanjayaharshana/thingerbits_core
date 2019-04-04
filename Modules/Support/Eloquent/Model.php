<?php

namespace Modules\Support\Eloquent;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::saved(function ($entity) {
            $entity->clearEntityTaggedCache();
        });

        static::deleted(function ($entity) {
            $entity->clearEntityTaggedCache();
        });
    }

    public function clearEntityTaggedCache()
    {
        Cache::tags($this->getTable())->flush();
    }

    /**
     * Register a new active global scope on the model.
     *
     * @return void
     */
    public static function addActiveGlobalScope()
    {
        static::addGlobalScope('active', function ($query) {
            $query->where('is_active', true);
        });
    }
}
