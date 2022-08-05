<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=['product_name','product_price','desc','cat_id','photo'];

    public function category()
    {

    return $this->belongsTo(category::class);

    }
    
}