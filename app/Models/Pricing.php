<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricing
 * @package App\Models
 * @version October 2, 2021, 6:55 am UTC
 *
 * @property string $product_price
 * @property string $service_price
 * @property string $discount_promo
 * @property string $coupon
 */
class Pricing extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_price',
        'service_price',
        'discount_promo',
        'coupon'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_price' => 'string',
        'service_price' => 'string',
        'discount_promo' => 'string',
        'coupon' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_price' => 'nullable|string|max:255',
        'service_price' => 'nullable|string|max:255',
        'discount_promo' => 'nullable|string|max:255',
        'coupon' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
