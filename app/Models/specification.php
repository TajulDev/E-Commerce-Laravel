<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specification extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table= "specification";
    protected $fillable =['os','display','processor','graphics','memory','battery','power_supply','hard_drive','product_id'];
}
