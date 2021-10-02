<?php

namespace App\Repositories;

use App\Models\Pricing;
use App\Repositories\BaseRepository;

/**
 * Class PricingRepository
 * @package App\Repositories
 * @version October 2, 2021, 6:55 am UTC
*/

class PricingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_price',
        'service_price',
        'discount_promo',
        'coupon'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pricing::class;
    }
}
