<?php

namespace App\Models\Inventary;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Product extends BaseModel
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'barcode',
        'units',
        'color',
        'size',
        'price_in',
        'price_out',
        'sku',
        'description',
        'isActive',
        'user_id',
        'category_id',
    ];
}
