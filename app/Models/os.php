<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class os extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'os';
    protected $fillable = ['name']; 
}
