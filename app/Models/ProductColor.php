<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ClearsResponseCache;
class ProductColor extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $table = 'product_colors';
    protected $fillable = [
      "product_id",
      "color_id",
      "quantity"

  ];
}
