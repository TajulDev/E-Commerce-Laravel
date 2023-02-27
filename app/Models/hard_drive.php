<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hard_drive extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'hard_drive';
    protected $fillable = ['name']; 
}
