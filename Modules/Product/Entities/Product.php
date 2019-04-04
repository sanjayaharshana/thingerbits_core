<?php

namespace Modules\Product\Entities;

use Modules\Support\Money;
use Modules\Media\Entities\File;
use Modules\Tax\Entities\TaxClass;
use Modules\Option\Entities\Option;
use Modules\Review\Entities\Review;
use Modules\Support\Eloquent\Model;
use Modules\Media\Eloquent\HasMedia;
use Modules\Meta\Eloquent\HasMetaData;
use Modules\Support\Search\Searchable;
use Illuminate\Support\Facades\Request;
use Modules\Category\Entities\Category;
use Modules\Product\Admin\ProductTable;
use Modules\Product\ValueObjects\Price;
use Modules\Support\Eloquent\Sluggable;
use Modules\Attribute\Entities\Attribute;
use Modules\Support\Eloquent\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Attribute\Entities\ProductAttribute;

class Product extends Model
{
    use Translatable,
        Searchable,
        Sluggable,
        HasMedia,
        HasMetaData,
        SoftDeletes;

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
    protected $fillable = [
        'tax_class_id',
        'slug',
        'sku',
        'price',
        'special_price',
        'special_price_start',
        'special_price_end',
        'manage_stock',
        'qty',
        'in_stock',
        'is_active',
        'new_from',
        'new_to',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'manage_stock' => 'boolean',
        'in_stock' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'special_price_start',
        'special_price_end',
        'new_from',
        'new_to',
        'start_date',
        'end_date',
        'deleted_at',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatedAttributes = ['name', 'description', 'short_description'];

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

        static::saving(function ($product) {
            Request::merge(['files' => [
                'base_image' => request()->input('files.base_image', []),
                'additional_images' => request()->input('files.additional_images', []),
            ]]);

            $product->selling_price = $product->getSellingPrice();
        });

        static::saved(function ($product) {
            $product->saveRelations(request()->all());
        });

        static::addActiveGlobalScope();
    }

    public static function newArrivals($limit)
    {
        return static::forCard()
            ->latest()
            ->take($limit)
            ->get();
    }

    public static function list($ids = [])
    {
        return static::withName()
            ->whereIn('id', $ids)
            ->select('id')
            ->get()
            ->mapWithKeys(function ($product) {
                return [$product->id => $product->name];
            });
    }

    public function scopeForCard($query)
    {
        $query->withName()
            ->withBaseImage()
            ->withPrice()
            ->withCount('options')
            ->addSelect([
                'products.id',
                'slug',
                'in_stock',
                'new_from',
                'new_to',
            ]);
    }

    public function scopeWithPrice($query)
    {
        $query->addSelect([
            'price',
            'special_price',
            'selling_price',
            'special_price_start',
            'special_price_end',
        ]);
    }

    public function scopeWithName($query)
    {
        $query->with('translations:id,product_id,locale,name');
    }

    public function scopeWithBaseImage($query)
    {
        $query->with(['files' => function ($q) {
            $q->wherePivot('zone', 'base_image');
        }]);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function taxClass()
    {
        return $this->belongsTo(TaxClass::class)->withDefault();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'product_options')
            ->orderBy('position')
            ->withTrashed();
    }

    public function relatedProducts()
    {
        return $this->belongsToMany(static::class, 'related_products', 'product_id', 'related_product_id');
    }

    public function upSellProducts()
    {
        return $this->belongsToMany(static::class, 'up_sell_products', 'product_id', 'up_sell_product_id');
    }

    public function crossSellProducts()
    {
        return $this->belongsToMany(static::class, 'cross_sell_products', 'product_id', 'cross_sell_product_id');
    }

    public function filter($filter)
    {
        return $filter->apply($this);
    }

    /**
     * Get the selling price of the product.
     *
     * @return int
     */
    public function getSellingPrice()
    {
        if ($this->hasSpecialPrice()) {
            return $this->special_price->amount();
        }

        return $this->price->amount();
    }

    public function getPriceAttribute($price)
    {
        return Money::inDefaultCurrency($price);
    }

    public function getSpecialPriceAttribute($specialPrice)
    {
        if (! is_null($specialPrice)) {
            return Money::inDefaultCurrency($specialPrice);
        }
    }

    public function getSellingPriceAttribute($sellingPrice)
    {
        return Money::inDefaultCurrency($sellingPrice);
    }

    public function getTotalAttribute($total)
    {
        return Money::inDefaultCurrency($total);
    }

    /**
     * Get the product's base image.
     *
     * @return \Modules\Media\Entities\File
     */
    public function getBaseImageAttribute()
    {
        return $this->files->where('pivot.zone', 'base_image')->first() ?: new File;
    }

    /**
     * Get product's additional images.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAdditionalImagesAttribute()
    {
        return $this->files
            ->where('pivot.zone', 'additional_images')
            ->sortBy('pivot.id');
    }

    public function getAttributeSetsAttribute()
    {
        return $this->getAttribute('attributes')->groupBy('attributeSet');
    }

    public function isInStock()
    {
        return $this->in_stock;
    }

    public function isOutOfStock()
    {
        return ! $this->isInStock();
    }

    public function hasStockFor($qty)
    {
        if (! $this->manage_stock) {
            return true;
        }

        return $this->qty >= $qty;
    }

    public function hasAttribute($attribute)
    {
        return $this->getAttribute('attributes')->contains('name', $attribute->name);
    }

    public function attributeValues($attribute)
    {
        return $this->getAttribute('attributes')
            ->where('name', $attribute->name)
            ->first()
            ->values
            ->implode('value', ', ');
    }

    public function hasAnyAttribute()
    {
        return $this->getAttribute('attributes')->isNotEmpty();
    }

    public function hasAnyOption()
    {
        return $this->options->isNotEmpty();
    }

    public function hasSpecialPrice()
    {
        if (is_null($this->special_price)) {
            return false;
        }

        if ($this->hasSpecialPriceStartDate() && $this->hasSpecialPriceEndDate()) {
            return $this->specialPriceStartDateIsValid() && $this->specialPriceEndDateIsValid();
        }

        if ($this->hasSpecialPriceStartDate()) {
            return $this->specialPriceStartDateIsValid();
        }

        if ($this->hasSpecialPriceEndDate()) {
            return $this->specialPriceEndDateIsValid();
        }

        return true;
    }

    private function hasSpecialPriceStartDate()
    {
        return ! is_null($this->special_price_start);
    }

    private function hasSpecialPriceEndDate()
    {
        return ! is_null($this->special_price_end);
    }

    private function specialPriceStartDateIsValid()
    {
        return today() >= $this->special_price_start;
    }

    private function specialPriceEndDateIsValid()
    {
        return today() <= $this->special_price_end;
    }

    public function avgRating()
    {
        return ceil($this->reviews->avg->rating * 2) / 2;
    }

    public function totalReviewsForRating($rating)
    {
        return $this->reviews->where('rating', $rating)->count();
    }

    public function percentageReviewsForStar($rating)
    {
        $totalReviews = $this->reviews->count();

        if ($totalReviews === 0) {
            return 0;
        }

        $reviewsCount = $this->totalReviewsForRating($rating);

        return round($reviewsCount / $totalReviews * 100);
    }

    public function isNew()
    {
        if ($this->hasNewFromDate() && $this->hasNewToDate()) {
            return $this->newFromDateIsValid() && $this->newToDateIsValid();
        }

        if ($this->hasNewFromDate()) {
            return $this->newFromDateIsValid();
        }

        if ($this->hasNewToDate()) {
            return $this->newToDateIsValid();
        }

        return false;
    }

    private function hasNewFromDate()
    {
        return ! is_null($this->new_from);
    }

    private function hasNewToDate()
    {
        return ! is_null($this->new_to);
    }

    private function newFromDateIsValid()
    {
        return today() >= $this->new_from;
    }

    private function newToDateIsValid()
    {
        return today() <= $this->new_to;
    }

    public function relatedProductList()
    {
        return $this->relatedProducts()
            ->withoutGlobalScope('active')
            ->pluck('related_product_id');
    }

    public function upSellProductList()
    {
        return $this->upSellProducts()
            ->withoutGlobalScope('active')
            ->pluck('up_sell_product_id');
    }

    public function crossSellProductList()
    {
        return $this->crossSellProducts()
            ->withoutGlobalScope('active')
            ->pluck('cross_sell_product_id');
    }

    public static function findBySlug($slug)
    {
        return static::with([
            'attributes.attribute.attributeSet', 'options', 'files', 'relatedProducts', 'upSellProducts',
        ])->where('slug', $slug)->firstOrFail();
    }

    /**
     * Get table data for the resource
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function table($request)
    {
        $query = $this->newQuery()
            ->withoutGlobalScope('active')
            ->withName()
            ->withBaseImage()
            ->withPrice()
            ->addSelect(['id', 'is_active', 'created_at'])
            ->when($request->has('except'), function ($query) use ($request) {
                $query->whereNotIn('id', explode(',', $request->except));
            });

        return new ProductTable($query);
    }

    /**
     * Save associated relations for the product.
     *
     * @param array $attributes
     * @return void
     */
    public function saveRelations($attributes = [])
    {
        $this->categories()->sync(array_get($attributes, 'categories', []));
        $this->upSellProducts()->sync(array_get($attributes, 'up_sells', []));
        $this->crossSellProducts()->sync(array_get($attributes, 'cross_sells', []));
        $this->relatedProducts()->sync(array_get($attributes, 'related_products', []));
    }

    /**
     * Get the indexable data array for the product.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        // MySQL Full-Text search handles indexing automatically.
        if (config('scout.driver') === 'mysql') {
            return [];
        }

        $translations = $this->translations()
            ->withoutGlobalScope('locale')
            ->get(['name', 'description', 'short_description']);

        return ['id' => $this->id, 'translations' => $translations];
    }

    public function searchTable()
    {
        return 'product_translations';
    }

    public function searchKey()
    {
        return 'product_id';
    }

    public function searchColumns()
    {
        return ['name'];
    }
}
