<?php

namespace Modules\Category\Entities;

use TypiCMS\NestableTrait;
use Modules\Support\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Modules\Support\Eloquent\Sluggable;
use Modules\Support\Eloquent\Translatable;

class Category extends Model
{
    use Translatable, Sluggable, NestableTrait;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_id', 'slug', 'position', 'is_searchable', 'is_active'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_searchable' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatedAttributes = ['name'];

    /**
     * The attribute that will be slugged.
     *
     * @var string
     */
    protected $slugAttribute = 'name';

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addActiveGlobalScope();
    }

    /**
     * Returns the public url for the category.
     *
     * @return string
     */
    public function url()
    {
        return route('products.index', ['category' => $this->slug]);
    }

    public static function tree()
    {
        return Cache::tags(['categories'])->rememberForever('categories.tree:' . locale(), function () {
            return static::orderByRaw('-position DESC')->get()->nest();
        });
    }

    public static function treeList()
    {
        return Cache::tags(['categories'])->rememberForever('categories.tree_list:' . locale(), function () {
            return static::orderByRaw('-position DESC')
                ->get()
                ->nest()
                ->setIndent('¦–– ')
                ->listsFlattened('name');
        });
    }

    /**
     * Get searchable categoires.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function searchable()
    {
        return Cache::tags(['categories'])->rememberForever('categories.searchable:' . locale(), function () {
            return static::where('is_searchable', true)->get();
        });
    }
}
