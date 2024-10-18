<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ClearsResponseCache;
class VariantValue extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $table = 'variant_values';

    protected $fillable = [
        'variant_id',
        'product_id',
        'sku_id',

    ];
}
