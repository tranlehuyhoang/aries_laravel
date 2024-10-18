<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\ClearsResponseCache;
class ProductComment extends Model
{
      use ClearsResponseCache;
    use HasFactory;
    // model for product rating feature
    protected $table = 'product_comments';
    protected $fillable = [
      "product_id",
      "user_id",
      "rating",
      "content",
      "color_id",
      "quantity"

  ];
  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
