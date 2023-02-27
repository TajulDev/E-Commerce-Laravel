<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producttable extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table= "product";
    protected $fillable =['product_title','product_category_id','product_price','feature','image'];
}
