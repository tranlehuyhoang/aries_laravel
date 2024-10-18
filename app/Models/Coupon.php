<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\ClearsResponseCache;
class Coupon extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $table = 'coupons';
    protected $fillable = [
        "code",
        "discount",
        "is_active",
        "expires_at",


  ];

}
