<?php

namespace Modules\Support\Eloquent;

use Illuminate\Database\Eloquent\Model;

abstract class TranslationModel extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('locale', function ($query) {
            $query->whereIn('locale', [locale(), config('app.fallback_locale')]);
        });
    }
}
