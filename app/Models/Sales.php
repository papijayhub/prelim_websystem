<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sales
 * @package App\Models
 * @version October 2, 2021, 7:26 am UTC
 *
 * @property string $sales_rep
 * @property string $address
 * @property string $item
 * @property integer $quantity
 */
class Sales extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sales_rep',
        'address',
        'item',
        'quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'sales_rep' => 'string',
        'address' => 'string',
        'item' => 'string',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sales_rep' => 'required|string|max:30',
        'address' => 'required|string|max:30',
        'item' => 'required|string|max:30',
        'quantity' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
