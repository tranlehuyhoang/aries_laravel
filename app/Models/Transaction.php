<?php

namespace App\Models;

use App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\ClearsResponseCache;
class Transaction extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $table = 'transaction';
    protected $fillable = [
        'user_id',
        'balance'

  ];

}

