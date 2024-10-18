<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ClearsResponseCache;
class SkuVariant extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $table = 'sku_variants';

    protected $fillable = ['sku', 'variant_value_id'];
}
