<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class graphics extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'graphics';
    protected $fillable = ['name']; 
}
