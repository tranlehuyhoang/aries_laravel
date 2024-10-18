<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ClearsResponseCache;
class Slider extends Model
{    use ClearsResponseCache;
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
        "image"  ,
        "status",
        "title",
        "description",


  ];

}
