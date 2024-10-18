<?php

namespace App\Models;

use App\Traits\ClearsResponseCache;
use App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
      use ClearsResponseCache;
    use HasFactory;
    protected $table = 'wishlists';
    protected $fillable = [
        'product_id',
        'user_id',

  ];

}

