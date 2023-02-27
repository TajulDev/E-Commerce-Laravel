<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class power_supply extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'power_supply';
    protected $fillable = ['name']; 
}
