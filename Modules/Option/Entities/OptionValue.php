<?php

namespace Modules\Option\Entities;

use Modules\Support\Money;
use Modules\Support\Eloquent\Model;
use Modules\Support\Eloquent\Translatable;

class OptionValue extends Model
{
    use Translatable;

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
    protected $fillable = ['price', 'price_type', 'position'];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatedAttributes = ['label'];

    public function getPriceAttribute($price)
    {
        if ($this->price_type === 'percent') {
            return $this->price;
        }

        return Money::inDefaultCurrency($price);
    }
}
