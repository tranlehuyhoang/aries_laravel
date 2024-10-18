<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ClearsResponseCache;
class Variant extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $fillable = [
        'value',
    ];

}
