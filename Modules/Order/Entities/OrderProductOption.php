<?php

namespace Modules\Order\Entities;

use Modules\Option\Entities\Option;
use Illuminate\Database\Eloquent\Model;
use Modules\Option\Entities\OptionValue;

class OrderProductOption extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['option', 'values'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function option()
    {
        return $this->belongsTo(Option::class)->withTrashed();
    }

    public function values()
    {
        return $this->belongsToMany(OptionValue::class, 'order_product_option_values')
            ->using(OrderProductOptionValue::class)
            ->withPivot('price');
    }

    public function getNameAttribute()
    {
        return $this->option->name;
    }

    public function storeValues($values)
    {
        $values = $values->mapWithKeys(function ($value) {
            return [$value->id => [
                'price' => $value->price->amount(),
            ]];
        });

        $this->values()->attach($values->all());
    }
}
