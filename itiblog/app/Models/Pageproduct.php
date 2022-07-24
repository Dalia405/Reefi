<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pageproduct extends Model
{
    use HasFactory;
    protected $fillable = ['productname', 'description','image' ,'price'];
}
