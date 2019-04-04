<?php

namespace Modules\Review\Entities;

use Illuminate\Http\Request;
use Modules\User\Entities\User;
use Modules\Support\Eloquent\Model;
use Modules\Product\Entities\Product;
use Modules\Review\Admin\ReviewTable;

class Review extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_approved' => 'boolean',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('approved', function ($query) {
            $query->where('is_approved', true);
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class)->withTrashed();
    }

    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    /**
     * Get table data for the resource
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function table(Request $request)
    {
        $query = static::withoutGlobalScope('approved')
            ->with(['product' => function ($query) {
                $query->withoutGlobalScope('active');
            }])
            ->when($request->productId, function ($query) use ($request) {
                return $query->where('product_id', $request->productId);
            });

        return new ReviewTable($query);
    }
}
