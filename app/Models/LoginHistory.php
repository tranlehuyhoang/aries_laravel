<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\ClearsResponseCache;
class LoginHistory extends Model
{
      use ClearsResponseCache;
    use HasFactory;
    
    protected $table = 'login_histories';
    protected $fillable = [
        'user_id',
        'login_time',
        'ip_address',
        'status',
        'created_at',
  ];
}
