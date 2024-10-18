<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ClearsResponseCache;
class Order extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'firstname',
        'lastname',
        'country',
        'address',
        'city',
        'zipcode',
        'company',
        'email',
        'phone',
        'status',
        'payment_mode',
        'user_id'

  ];
}
