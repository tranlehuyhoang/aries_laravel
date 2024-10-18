<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ClearsResponseCache;
class ProductImage extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $table = 'product_images';
    protected $fillable = [
      "product_id",
      "image",

  ];
}
