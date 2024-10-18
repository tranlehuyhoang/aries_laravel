<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ClearsResponseCache;
class Sku extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $fillable = [
        'product_id',
        'original_price',
        'promotion_price',
        'quantity',
    ];
}
