<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class processor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'processor';
    protected $fillable = ['name']; 
}
