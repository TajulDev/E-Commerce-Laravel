<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class display extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'display';
    protected $fillable = ['name']; 
}
